<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function addTicket(){
        return view('add-ticket');
    }

    public function listTickets(){
        $tickets = Ticket::where('owner', Auth::id())->get();

        return view('tickets.list', [
            'tickets' => $tickets,
        ]);
    }

    
}
