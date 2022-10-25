<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $evensts = Event::all();

        return view('welcome', ['events' => $evensts]);
    }
    public function create()
    {
        return view('events.create');
    }
}