<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function handleRegister(Request $request)
    {
    

            
            $user=User::create(
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                ]
                );

                auth::login($user);

                return redirect(route('home'));
    }

    public function login()
    {
        return view('login');
    }
    public function handleLogin(Request $request)
    {
        $request->validate(
            [
                
                'email'=>'required|email|max:100',
                'password'=>'required|string|max:50|min:6',

            ]
            );

            
           $is_login= auth::attempt(['email'=>$request->email,'password'=>$request->password]);

            if(!$is_login)
            {
                return back();
            }
                return redirect(route('home'));
    }

    public function logout()
    {
        auth::logout();
        return redirect(route('home'));

    }

    

   
}
