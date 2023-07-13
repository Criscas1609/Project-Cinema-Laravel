<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller{

    public $tickets = [];

    public function createTicket(Request $request){
        $movieName = $request->input('movieName');
        $chair = $request->input('chair');
        $movie = Movie::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($movieName) . '%'])->first();
        $client = Auth::user();
        $counter = 1;
        $tickets = Ticket::all();
        foreach($tickets as $ticket){
            if($ticket->clientName == $client->name){
                $counter++;
            }
        }

        if($counter <= 4){
            $ticket = Ticket::create([
                'movieName' => $movie->name,
                'schedule' => $movie->schedule,
                'seat' => $chair,
                'price' => '10000',
                'clientName' => $client->name
            ]);
            $tickets = Ticket::all();
            return view('movieSeat', ['movie' => $movie, 'tickets' => $tickets, 'error' => null]);
        }else{
            $error = 'alert';
            return view('movieSeat', ['movie' => $movie, 'tickets' => $tickets, 'error' => $error]);
        }
    }

    public function deleteProcess(Request $request){
        $tickets = Ticket::all();
        $movieName = $request->input('movieName');
        $movie = Movie::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($movieName) . '%'])->first();
        $client = Auth::user();

        foreach($tickets as $ticket){
            if($ticket->clientName == $client->name){
                $ticket->delete();  
            }
        }

        $allMovies = Movie::all();
        return view('info', ['allMovies' => $allMovies] );
    }

    public function saveReservation(Request $request){
        $tickets = Ticket::all();
        $movieName = $request->input('movieName');
        $movie = Movie::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($movieName) . '%'])->first();
        $client = Auth::user();
        $clientChair = [];
        $total=0;

        foreach($tickets as $ticket){
            if($ticket->clientName == $client->name && $ticket->movieName == $movie->name){
                $clientChair[] = $ticket->seat; 
                $total = $total + $ticket->price;

            }
        }

        return view('sell', ['movie' => $movie, 'chairs' => $clientChair, 'error' => null, 'total' => $total]);
    }


}
