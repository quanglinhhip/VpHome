<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::id() > 0) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        // echo 1; die();
        // Lấy thông tin đăng nhập từ request
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', 'Đăng nhập thành công');
        }
        return back()->with('error', 'Email hoac mat khau khong chinh xac');
    }

    public function logout(Request $request)
    {
        if (Auth::id() == null) {
            return redirect()->route('login')->with('error', 'Bạn chưa đăng nhập');
        }
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Dang xuat thanh cong');
    }
}
