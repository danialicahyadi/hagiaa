<?php

namespace App\Http\Controllers\Admin;

use Hash;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function forgetPassword()
    {
        return view('admin.forget-password');
    }
    public function forgetPasswordSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return redirect()->back()->with('error', 'Email tidak terdaftar');
        }
        $token = hash('sha256', time());
        $admin->token = $token;
        $admin->update();
        $reset_link = url('admin/reset-password/' . $token . '/' . $request->email);
        return redirect($reset_link);
    }
    public function resetPassword($token, $email)
    {
        $admin = Admin::where('token', $token)->where('email', $email)->first();
        if (!$admin) {
            return redirect()->route('admin-login');
        }
        return view('admin.reset-password', compact('token', 'email'));
    }
    public function resetPasswordSubmit(Request $request)
    {
        $request->validate([
            'password' =>  'required',
            'retype_password' => 'required|same:password',
        ]);
        $admin = Admin::where('token', $request->token)->where('email', $request->email)->first();
        $admin->password = Hash::make($request->password);
        $admin->token = '';
        $admin->update();
        return redirect()->route('admin-login')->with('success', 'Password ' . $admin->email . ' berhasil di ubah !');
    }
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // dd($credential);
        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->route('admin-login')->with('error', 'Data yang anda masukkan salah atau tidak ada');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }
}
