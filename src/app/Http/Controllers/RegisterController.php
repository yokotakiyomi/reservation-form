<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            Auth::login($user);
            return redirect()->route('thanks');
        }

        return redirect()->back()->withErrors(['error' => 'ユーザー登録に失敗しました。']);
    }
}