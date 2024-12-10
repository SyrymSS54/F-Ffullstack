<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthCOntroller extends Controller
{
    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function get_signin(User $user,Request $request)
    {
        $validator = Validator::make($request->all(),[
            "login" => 'required|string',
            'password' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $validator = $validator->safe()->only(['login','password']);

        $credentials = [
            'email' => $validator['login'],
            'password' => $validator['password']
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('personal'));
        };

        return redirect(route('signin'));

    }

    public function get_signup(User $user,Request $request)
    {
        $validator = Validator::make($request->all(),[
            "login" => "required|string",
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $validator = $validator->safe()->only(['login','email','password']);

        $user->name = $validator['login'];
        $user->email = $validator['email'];
        $user->password = $validator['password'];

        $user->save();
        

        $credentials = [
            'name' => $validator['login'],
            'password' => $validator['password']
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('personal'));
        };
    }
}
