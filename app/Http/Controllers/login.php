<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class login extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function notification()
    {

        return view('alert.notification');
    }

    public function checklogin(Request $request)
    {
        //dd(Hash::make('Password@1'));
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email|min:3|max:50',
            'password' => 'required|string|min:6'
        ], [
            'email.required' => 'Email ID / Mobile Number is required',
            'email.email' => 'Invalid Email ID',
            'email.min' => 'Minimum 3 characters required',
            'email.max' => 'Maximum 50 characters required',
            'password.required' => "Please Enter Your Password",
            //'password.regex' => "Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.",
        ]);
        if ($validator->fails()) {
            //dd($validator->errors()->first());
            $this->setSession(false, $validator->errors()->first());
            return redirect('/');
        }
        $check = User::where('email', $request->email)->first();
        if (empty($check)) {
            $this->setSession(false, 'Please enter valid email id only');

            return redirect('/');
        }

        $check_email_available = User::where('email', $request->email)->first();
        if (empty($check_email_available)) {
            $this->setSession(false, 'Email Id is Not Exist!. ');

            return redirect('/');
        }
        $credential = ['email' => $request->email, 'password' => $request->password];

        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::attempt($credential, $remember_me)) {
            $user = Auth::User();
            return redirect()->intended('/dashboard');
        } else {
            $this->setSession(false, 'Invalid Credentials');
            return redirect('/');
        }
    }
    public function setSession($status, $msg)
    {
        session()->forget('status');
        session()->forget('msg');
        Session::put('status', $status);
        Session::put('msg', $msg);
    }



    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}