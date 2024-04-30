<?php

namespace App\Http\Controllers\FrontEnd;

use App\Consts;
use App\Models\Cart;
use App\Models\CmsProduct;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOrderService(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'customer_note' => "required|string",
                'item_id' => "required|integer|min:0",
            ]);
            // Check and store order
            $order_params = $request->only([
                'name', 'email', 'phone', 'customer_note'
            ]);
            $order_params['is_type'] = Consts::ORDER_TYPE['service'];
            $order = Order::create($order_params);

            // Check and store order_detail
            $order_detail_params = $request->only([
                'item_id', 'quantity', 'price', 'discount'
            ]);
            $order_detail_params['quantity'] = $request->get('quantity') > 0 ? $request->get('quantity') : 1;
            $order_detail_params['order_id'] = $order->id;
            $order_detail_params['json_params']['post_type'] = Consts::POST_TYPE['service'];
            $order_detail_params['json_params']['post_link'] = $request->headers->get('referer');

            $order_detail = OrderDetail::create($order_detail_params);

            $messageResult = $this->web_information->information->notice_advise ?? __('Booking successfull!');

            if (isset($this->web_information->information->email)) {
                $email = $this->web_information->information->email;
                Mail::send(
                    'frontend.emails.booking',
                    [
                        'order' => $order,
                        'order_detail' => $order_detail
                    ],
                    function ($message) use ($email) {
                        $message->to($email);
                        $message->subject(__('You received a new appointment from the system'));
                    }
                );
            }
            DB::commit();
            return $this->sendResponse($order, $messageResult);
        } catch (Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    // Cart
    public function cart()
    {
        return $this->responseView('frontend.pages.cart.index');
    }

    public function addCart(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $params = $request->all();
            $params['customer_id'] = Auth::guard('web')->user()->id;
            $params['quantity'] = 1;
            $cart = Cart::where('customer_id', Auth::guard('web')->user()->id)->where('product_id', $params['product_id'])->first();
            if ($cart) {
                $cart->quantity = $cart->quantity + $params['quantity'];
                $cart->save();
            } else {
                Cart::create($params);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Thêm vào giỏ hàng thành công',
                'data' => (object)[
                    'carts_count' => Cart::where('customer_id', Auth::guard('web')->user()->id)->count()
                ]
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Vui lòng đăng nhập để thêm vào giỏ hàng'
            ], 401);
        }
    }

    public function updateCart(Request $request)
    {
        $quantity = request('quantity') ?? '1';
        $id = request('id') ?? '';
        $totalPrice = 0;

        if ($id && $quantity) {
            $cart = session()->get('cart');
            $cart[$id]["quantity"] = $quantity;
            session()->put('cart', $cart);

            foreach ($cart as $item) {
                $totalPrice += $item['price'] * $item['quantity'];
            }
            return response()->json([
                'quantity' => $cart[$id]['quantity'],
                'price' => $cart[$id]['quantity'] * $cart[$id]['price'],
                'totalPrice' => $totalPrice
            ]);
        }
    }

    public function removeCart(Request $request)
    {
        if ($request->id) {
            $cart = Cart::find($request->id);
            $cart->delete();
            return back()->with('successMessage', "Xóa giỏ hàng thành công");
        }
        return back()->with('errorMessage', "Xóa giỏ hàng không thành công");
    }

    public function storeOrderProduct(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user = Auth::guard('web')->user();
            DB::beginTransaction();
            try {
                $order_params = [
                    'name' =>  $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    'customer_note' => "",
                    'customer_id' => $user->id,
                    'is_type' => Consts::ORDER_TYPE['product']
                ];
                $order_params = $request->only([
                    'name',
                    'email',
                    'phone',
                    'address',
                    'customer_note'
                ]);
                
                $order = Order::create($order_params);

                $products = $request->products;
                $data = [];
                $productIds = [];
                foreach ($products as $item) {
                    $product = CmsProduct::findOrFail($item['id']);

                    $order_detail_params['order_id'] = $order->id;
                    $order_detail_params['item_id'] = $product->id;
                    $order_detail_params['quantity'] = $item['quantity'] ?? 1;
                    $order_detail_params['price'] = $product->price ?? null;
                    $order_detail_params['customer_note'] = "";
                    $order_detail_params['admin_note'] = "";
                    $order_detail_params['status'] = 'pending';
                    array_push($data, $order_detail_params);
                    array_push($productIds, $product->id);


                    $product->quantity = $product->quantity - $order_detail_params['quantity'];
                    $product->save();
                }
                OrderDetail::insert($data);

                Cart::where('customer_id', $user->id)->whereIn('product_id', $productIds)->delete();
                
                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Đặt hàng thành công.'
                ], 200);
            } catch (Exception $ex) {
                return response()->json([
                    'status' => 'error',
                    'message' => $ex->getMessage(),
                ], 400);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Vui lòng đăng nhập để thêm vào giỏ hàng'
            ], 401);
        }
    }

    public function orderTracking()
    {
        if (Auth::check()) {
            $id = auth()->user()->id;

            $orders = Order::with('orderDetails')
                ->where('customer_id', $id)
                ->orderBy('id', 'DESC')
                ->get();

            $this->responseData['details'] = $orders;
        }
        return $this->responseView('frontend.pages.product.order_tracking');
    }
}
