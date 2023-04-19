<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

        $users = DB::table('users')->select('users.*','responsables.*')
            ->join('responsables', 'responsables.user_id', '=', 'users.id')
            ->where('responsables.user_id', "=", Auth::user()->id)
            ->get();

        return view('home')->with('users', $users);
    }
}
