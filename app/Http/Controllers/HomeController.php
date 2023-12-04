<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        if(Auth::user()->role== "Master"){
            $admins = [""];
            $users = [""];
            $masters = [""];
            $agents = User::where('role',"Agent")->where('user_id', Auth::user()->id)->get();
        }elseif(Auth::user()->role== "Agent"){
            $admins = [""];
            $agents = [""];
            $masters = [""];
            $users = User::where('role',"User")->where('user_id', Auth::user()->id)->get();
        }else{
            $admins = User::where('role',"Admin")->get();
            $masters = User::where('role',"Master")->get();
            $agents = User::where('role',"Agent")->get();
            $users = User::where('role',"User")->get();
        }
        return view('welcome', compact('admins','masters','agents', 'users'));
    }

    public function login(){
        return view('login');
    }
}
