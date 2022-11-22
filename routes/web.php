<?php

use App\Http\Controllers\BuitenplantController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// TEST ROUTES

// Route::get('/testroute', [PagesController::class, 'showTest'])->name('test');
// Route::get('/testroute2', [PagesController::class, 'showTest2']);
// Route::get('/testroute3', [PagesController::class, 'showTest3']);

// Route::get('/buitenplant', [BuitenplantController::class, 'viewBuitenplant']);

// Route::post('/buitenplant', [BuitenplantController::class, 'saveBuitenplant']);



// NORMALE ROUTES
Route::get('/about-us', [PagesController::class, 'viewAboutUs'])->name('about-us');

Route::get('/contact', [PagesController::class, 'viewContact'])->name('contact');

Route::get('/', [PagesController::class, 'viewHome'])->name('home');


Route::post('/create-ticket', [PagesController::class, 'createTicket'])->name('createTicket');

Route::get('/tickets', [TicketsController::class, 'listTickets'])->name('listTickets')
->middleware('auth');

Route::get('/admin-add-event', [EventsController::class, 'addEvent'])->name('add-event')
->middleware('auth');

Route::get('/admin-add-ticket', [TicketsController::class, 'addTicket'])->name('add-ticket')
->middleware('auth');
require __DIR__.'/auth.php';
