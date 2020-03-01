<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function talk() {

        $users = Auth::user();
        $user_id = $users->id;
        $user_name = $users->name;
        $username=\App\Talk::whereUser_id($user_id)->update(['user_name' => $users->name]);
        $talks = Talk::get();
        return view('talk.talk', ['talks' => $talks]);
    }
    
    public function userpage(){
        return view('/');
    }
}
