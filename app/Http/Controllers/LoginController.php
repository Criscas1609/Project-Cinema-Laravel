<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Client;

class LoginController extends Controller
{
    //
    public function login(LoginRequest $request){

        $credentials = $request->only('username', 'password');

    // Obtener el usuario correspondiente al correo electrónico ingresado
    $user = Client::where('username', $credentials['username'])->first();

    if (!$user) {
        // El usuario no existe
        return view('/register');
    }

    if (Hash::check($credentials['password'], $user->password)) {
        // La contraseña es correcta
        Auth::login($user);
        return view('/info');
    } else {
        // La contraseña es incorrecta
        return view('/register');
    }

}
    
}


