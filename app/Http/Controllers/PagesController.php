<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    // public function showTest () {
    //     return view('test');
    // }
    // public function showTest2 () {
    //     return view('test2');
    // }
    // public function showTest3 () {
    //     return view('test3');
    // }


    
    public function createTicket(Request $request){
        $request;
        $newTicket = new Ticket();
        $newTicket->owner = $request->input('owner');
        $newTicket->qr = $request->input('qr');
        $newTicket->event = $request->input('event');
        $newTicket->save();
        return redirect()->route('test');
    }

    public function viewHome () {
        return view('home');
    }
    public function viewAboutUs () {
        return view('about-us');
    }
    public function viewContact () {
        return view('contact');
    }
}
