<?php

namespace App\Http\Controllers\FrontEnd;

use Exception;
use App\Consts;
use App\Http\Services\ContentService;
use App\Http\Services\PageBuilderService;
use App\Models\Admin;
//use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( Auth::guard('web')->check() ){
            return $this->responseView('frontend.pages.user.index');
        }else{
            return $this->responseView('frontend.home');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::guard('web')->user();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'old_password' => [
                'nullable',
                'required_with:new_password',
                function ($attribute, $value, $fail) use ($user) {
                    if (!empty($value) && !Hash::check($value, $user->password)) {
                        // $fail(__('The :attribute is incorrect.'));
                        $fail(__('Mật khẩu hiện tại không chính xác.'));
                    }
                },
            ],
            'new_password' => 'nullable|required_with:old_password|min:6',
            'confirm_password' => 'nullable|required_with:new_password|same:new_password',
        ]);

        //đoạn dưới để custom message thông báo
        $customMessages = [
            'name.required' => 'Vui lòng nhập tên của bạn.',
            'phone.required' => 'Vui lòng nhập số điện thoại của bạn.',
            'email.required' => 'Vui lòng nhập địa chỉ email của bạn.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'old_password.required_with' => 'Vui lòng nhập mật khẩu hiện tại.',
            'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự.',
            'new_password.required_with' => 'Vui lòng nhập mật khẩu mới.',
            'confirm_password.required_with' => 'Vui lòng nhập xác nhận mật khẩu mới.',
            'confirm_password.same' => 'Xác nhận mật khẩu không khớp với mật khẩu mới.',
        ];
        $validator->setCustomMessages($customMessages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->input('new_password'));
        }

        // Lưu thông tin người dùng
        $user->save();
        return back()->with('updateSuccessMessage', 'Cập nhật thông tin tài khoản thành công!');
        return $this->responseView('frontend.pages.user.index');
    }

    public function register(Request $request)
    {
        $params = $request->all();
        // dd($params);
        $count = User::where('email', $params['email'])->get()->count();
        if ($count == 0) {
            $user_register = new User;
            $user_register->name = $params['fullname'];
            $user_register->email = $params['email'];
            $user_register->password = Hash::make($params['password']);;
            $user_register->status = 'active';
            $emailParts = explode('@', $params['email']);
            $user_register->username = $emailParts[0];
            $user_register->save();

            if ($user_register->save() == true) {
                return redirect()->back()->with(
                    'registerSuccessMessage',
                    'Đăng kí tài khoản thành công, đăng nhập để tiếp tục!'
                );
            }
        } else {
            return redirect()->back()->with(
                'errorMessageEmail',
                'Email đã được sử dụng, vui lòng sử dụng email khác!'
            );
        }

        return redirect()->back()->with(
            'registerErrorMessage',
            'Đăng kí không thành công, vui lòng thử lại!'
        );
    }

    public function shopCart()
    {
        return $this->responseView('frontend.pages.user.shop_cart');
    }
}
