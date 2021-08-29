<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {



        return view('dashboard.auth.login');
    }

    public function authenticate( Request $request)
    {

        $login_data  = ['email'=>$request->email,
        'password'=>$request->password];

      if(Auth::attempt($login_data)){

    //   return view('dashboard.dashboard');
    return redirect()->route('dashboard');
}

return redirect()->back()->with('error','invalid email or password')->withInput();
    }

    public function logout()
    {
        if (Auth::check())
        {
           Auth::logout();
        }
        return redirect()->route('dashboard');

    }

    public function register()
    {
       return view('dashboard.auth.register');
    }

    public function no_register(Request $request,User $user)
    {

        $request->validate([
            'fname'=>'required|string',
            'lname'=>'required|string',
            'email'=>'required|email',
            'password'=>'required',
           ]);


           $password = Hash::make($request->password);


           $user->fname = $request->fname;
           $user->lname = $request->lname;
           $user->email = $request->email;
           $user->password = $password;
           $user->save();

        return redirect()->back()->with('success','The admin has been successfully Regsiter !');
    }
}
