<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function store(Request $request)
    {
        return redirect()->back()->with('message', 'ご予約ありがとうございました');
    }
}
