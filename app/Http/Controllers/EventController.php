<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function create(){
        return view('events.create');
    }
}

// Route::get('/contact', function () {
//     return view('contact');
// });
