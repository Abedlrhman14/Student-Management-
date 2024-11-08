<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function registerRequest(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
        ]);
        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('login');
    }
    public function login()
    {
        return view('users.login');
    }
    public function loginRequest(Request $request)
    {
        if(Auth::attempt($request->except('_token')))
        {
            return redirect('users.login');
        }
        return view('admin.dashbaord');
    }
}
