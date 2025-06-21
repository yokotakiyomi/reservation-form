<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->intended('/my_page');
        }

            return back()->withErrors([
            'email' => '認証情報が正しくありません。',]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
