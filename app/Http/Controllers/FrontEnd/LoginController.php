<?php

namespace App\Http\Controllers\FrontEnd;

use App\Consts;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('frontend.home');
        }
        return $this->responseView('frontend.pages.user.login');
    }

    public function login(LoginRequest $request)
    {
        $url = $request->input('url') ?? route('frontend.home');

        if (Auth::guard('web')->check()) {
            return redirect()->route('frontend.home');
        }

        $email = $request->email;
        $password = $request->password;
        $attempt = Auth::guard('web')->attempt([
            'email' => $email,
            'password' => $password,
            'status' => Consts::USER_STATUS['active']
        ]);
        if ($attempt) {
            return redirect($url);
        }

        return redirect()->back()->with(
            'errorMessage',
            'Tài khoản hoặc mật khẩu không chính xác!'
        );
    }
    public function loginAjax(Request $request)
    {
        if (Auth::guard('web')->check()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Bạn đã đăng nhập trước đó'
            ], 200);
        }
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();

        

        $attempt = Auth::guard('web')->attempt([
            'email' => $email,
            'password' => $password,
            'status' => Consts::USER_STATUS['active']
        ]);
        if ($attempt) {
            return response()->json([
                'status' => 'success',
                'message' => 'Đăng nhập thành công'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Đăng nhập không thành công, vui lòng thử lại!'
            ], 401);
        }
    }
    public function registerAjax(Request $request)
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
                return response()->json([
                    'status' => 'success',
                    'message' => 'Đăng ký thành công, vui lòng đăng nhập để tiếp tục!'
                ], 200);
            }
        } 
        return response()->json([
            'status' => 'error',
            'message' => 'Đăng ký không thành công, vui lòng thử lại!'
        ], 400);
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->back();
    }

    public function register()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('frontend.home');
        }

        return $this->responseView('frontend.pages.user.register');
    }

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback() {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('username', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'username' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        }
        catch(Exception $e) {
            return redirect('auth/google');
        }
    }

    public function redirectToFacebook() {
        return Socialite::driver('google')->redirect();
    }
    public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('username', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'username' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        }
        catch(Exception $e) {
            return redirect('auth/facebook');
        }
    }

}
