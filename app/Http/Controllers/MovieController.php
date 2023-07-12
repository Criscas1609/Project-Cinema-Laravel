<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Ticket;

class MovieController extends Controller
{
    public function getMovie(Request $request){
        $name = $request->input('movie');
        $movie = Movie::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($name) . '%'])->first();
        $tickets = Ticket::all();
        return view('movieSeat', ['movie' => $movie, 'tickets' => $tickets, 'error' => null]);
    }

    public function home(){
        $allMovies = Movie::all();
        return view('info', compact('allMovies'));
    }

}
