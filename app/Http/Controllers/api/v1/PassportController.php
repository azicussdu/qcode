<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only(['email', 'password']);

        if(auth()->attempt($credentials)) {//if email is verified == 1
            $user = auth()->user();
            $accessToken = $user->createToken('qcodetoken')->accessToken;

            return response(['user' => $user, 'access_token' => $accessToken]);

        }
        else{
            return response(['message' => 'Invalid login or password']);
        }
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'name' => 'required|string'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        return response(['user' => $user]);
    }
}
