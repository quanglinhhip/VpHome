<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {}

    public function index()
    {
        // dd(Auth::id());
        if (Auth::id() > 0) {
            return redirect()->route('dashboard.index');
        }
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request)
    {
        // Lấy thông tin đăng nhập từ request
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->route('dashboard.index')->with('success', 'Dang nhap thanh cong');
        }
        return redirect()->route('auth.admin')->with('error', 'Email hoac mat khau khong chinh xac');
    }
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.admin')->with('suscess', 'Logout successful');
    }
}
