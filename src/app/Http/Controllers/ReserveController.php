<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReserveController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'reservation_number' => 'required|integer|min:1',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'reservation_number' => $request->reservation_number,
        ]);

        return view('done');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        if ($reservation->user_id !== Auth::id()) {
            abort(403);
        }

        $reservation->delete();

        return redirect()->route('mypage')->with('success', '予約をキャンセルしました');
    }
}
