<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function show(){
    return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $client = Client::create($request->validated());
        return view('app');
    }


}
