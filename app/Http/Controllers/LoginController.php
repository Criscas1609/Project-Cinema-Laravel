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
    
    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        $user = Auth::user();
    
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
        }
    
        $user->password = $request->new_password;

        $user->update();

        return $user->password;
    }
    

    
}


