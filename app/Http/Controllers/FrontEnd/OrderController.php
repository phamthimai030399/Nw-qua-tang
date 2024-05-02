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
        $cartCount = 0;
        $params = $request->all();
        $params['quantity'] = 1;
        if (Auth::guard('web')->check()) {
            $params['customer_id'] = Auth::guard('web')->user()->id;
            $cart = Cart::where('customer_id', Auth::guard('web')->user()->id)->where('product_id', $params['product_id'])->first();
            if ($cart) {
                $cart->quantity = $cart->quantity + $params['quantity'];
                $cart->save();
            } else {
                Cart::create($params);
            }
            $cartCount = Cart::where('customer_id', Auth::guard('web')->user()->id)->count();
        } else {
            $cart = session()->get('cart') ?? [];
            $check = false;
            foreach($cart as $item) {
                if ($item->product_id == $params['product_id']) {
                    $item->quantity++;
                    $check = true;
                }
            }
            if(!$check) {
                $cart[] = (object)$params;
            }
            $cartCount = count($cart);
            session()->put('cart', $cart);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Thêm vào giỏ hàng thành công',
            'data' => (object)[
                'carts_count' => $cartCount
            ]
        ], 200);
    }

    public function updateCart(Request $request)
    {
        $quantity = request('quantity') ?? '1';
        $id = request('id') ?? '';
        $totalPrice = 0;

        if ($id && $quantity) {
            $cart = session()->get('cart') ?? [];
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
        if (Auth::guard('web')->check()) {
            $cart = Cart::where('product_id', $request->product_id)->first();
            $cart->delete();
            return back()->with('successMessage', "Xóa giỏ hàng thành công");
        } else {
            $cart = session()->get('cart') ?? [];
            foreach ($cart as $key => $item) {
                if ($item->product_id == $request->product_id) {
                    unset($cart[$key]);
                }
            }
            session()->put('cart', $cart);
            return back()->with('successMessage', "Xóa giỏ hàng thành công");
        }
        
        return back()->with('errorMessage', "Xóa giỏ hàng không thành công");
    }

    public function storeOrderProduct(Request $request)
    {
            DB::beginTransaction();
            try {
                $order_params = [
                    'name' =>  $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'customer_note' => $request->customer_note,
                    'customer_id' => Auth::guard('web')->user()->id ?? 0,
                    'is_type' => Consts::ORDER_TYPE['product'],
                    'order_date' => Carbon::now(),
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

                if (Auth::guard('web')->check()) {
                    Cart::where('customer_id', Auth::guard('web')->user()->id)->whereIn('product_id', $productIds)->delete();
                } else {
                    $cart = session()->get('cart') ?? [];
                    foreach ($cart as $key => $item) {
                        if (in_array($item->product_id, $productIds)) {
                            unset($cart[$key]);
                        }
                    }
                    session()->put('cart', $cart);
                }
                
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

    public function shopCart()
    {
        if(Auth::guard('web')->check()) {
            $this->responseData['carts'] = Cart::where('customer_id', Auth::guard('web')->user()->id)->with('product')->get();
        } else {
            $cart = session()->get('cart') ?? [];
            $products = CmsProduct::whereIn('id', array_column($cart, 'product_id'))->get();
            foreach ($cart as $key => $item) {
                $check = false;
                foreach ($products as $product) {
                    if ($item->product_id == $product->id) {
                        $cart[$key]->product = $product;
                        $check = true;
                    }
                }
                if (!$check) {
                    unset($cart[$key]);
                }
            }
            $this->responseData['carts'] = $cart;
        }
        return $this->responseView('frontend.pages.user.shop_cart');
    }
}
