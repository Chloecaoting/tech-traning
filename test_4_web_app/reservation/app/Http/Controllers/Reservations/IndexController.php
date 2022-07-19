<?php

namespace App\Http\Controllers\Reservations;

use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation -> topic = $request -> topic;
        $reservation -> content = $request -> content;
        $reservation -> metting = $request -> metting;
        $reservation -> user_id = Auth::id();

        $reservation -> save();
        return redirect() -> route('reservations.index');
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.edit', ['reservation'=>$reservation]);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation -> topic = $request -> topic;
        $reservation -> content = $request -> content;
        $reservation -> metting = $request -> metting;
        $reservation -> save();
        return redirect() -> route('reservations.index');
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation -> delete();
        return redirect() -> route('reservations.index');
    }
}
