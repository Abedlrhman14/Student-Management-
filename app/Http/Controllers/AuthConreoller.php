<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthConreoller extends Controller
{

    public function login()
    {
        if(!empty(Auth::check()))
        {
            return redirect('admin/dashbaord');
        }
        return view('auth.login');
    }
    public function Authlogin(Request $request)
    {
            // $remember = !empty($request->remember) ? true : false ;
            // if(Auth::attempt(['email' => $request->email, 'password' => $request-> password], $remember))
            // {

            //     return redirect('admin/dashbaord');

            // }
            // else
            // {
            //     return redirect()->back()->with('error', 'please enter currect email and password');
            // }
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended('admin.dashbaord');
            }

            return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }


}
