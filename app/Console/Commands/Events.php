<?php


namespace App\Console\Commands;


use App\Todo;

class Events
{
    public function index()
    {
        $todos = Todo::all();
        return view('/', compact('todos'));
    }
}
