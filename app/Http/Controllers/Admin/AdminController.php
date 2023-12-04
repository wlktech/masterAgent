<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin(){
        $users = User::where('role', "Admin")->get();
        return view("backend.users.admin", compact("users"));
    }
    public function admin_create(Request $request){

    }

    public function master(){
        $users = User::where('role', "Master")->get();
        return view("backend.users.master", compact("users"));
    }

    public function agent(){
        $users = User::where("role", "Agent")->where('user_id', Auth::user()->id)->get();
        // return $users;
        return view("backend.users.agent", compact("users"));
    }

    public function agent_create(){
        return view('backend.forms.agent.create');
    }

    public function agent_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make( $request->password ),
            'role' => "Agent",
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('agentList'))->with('success','Agent has been created successfully.');
    }

    public function user(){
        $users = User::where("role", "User")->where('user_id', Auth::user()->id)->get();
        return view("backend.users.user", compact("users"));
    }

    public function user_create(){
        return view('backend.forms.user.create');
    }

    public function user_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make( $request->password ),
            'role' => "User",
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('userList'))->with('success','User has been created successfully.');
    }
}
