<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get user id
        $user_id=auth()->user()->id;

        //get the user data
        $user=User::find($user_id);

        return view('dashboard')
            ->with('listings',$user->listings);
    }
}
