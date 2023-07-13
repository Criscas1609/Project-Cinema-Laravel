<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Movie;
use App\Models\Client;

class LoginController extends Controller{
  
    public function login(LoginRequest $request){
        $credentials = $request->only('username', 'password');

         $user = Client::where('username', $credentials['username'])->first();
            
         if (!$user) {
             return view('/register');
         }
        
         if (Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $allMovies = Movie::all();
            return view('info', compact('allMovies'));

         } else {
             return view('/register');
            }
    }  
    
    

    
}


