<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Movie;

class RegisterController extends Controller
{

    public function register(RegisterRequest $request){
        $client = Client::create($request->validated());
        return view('app');
    }

    public function getUser(){
        $client = Auth::user();
        return view('update', ['user' => $client]);
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $client = Auth::user();

        $client->update([
            'name' => $request->name,
            'username' => $request->username,
            'birthdate' => $request->birthdate,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $allMovies = Movie::all();
        return view('info', ['allMovies' => $allMovies] );
    }


}
