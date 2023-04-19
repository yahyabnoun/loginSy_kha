<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = DB::table('users')->select('users.*')
            ->join('responsables', 'responsables.user_id', '=', 'users.id')
            ->where('responsables.admin_id', "=", Auth::user()->id)
            ->distinct('name')
            ->get();
        return view('admin')->with('users', $users);
    }
    public function ajuotertash(Request $request)
    {


        DB::table('responsables')->insert([
            'admin_id' =>  Auth::user()->id,
            'user_id' =>  $request->employe,
            'title' =>  $request->title,
            'description' =>  $request->Description,
            'durée' =>  fake()->time($format = 'H:i:s', $max = 'now'),

        ]);


        $users = DB::table('users')->select('users.*')
            ->join('responsables', 'responsables.user_id', '=', 'users.id')
            ->where('responsables.admin_id', "=", Auth::user()->id)
            ->distinct('name')
            ->get();
        return view('admin')->with('users', $users);



    }
}
