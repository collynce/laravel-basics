<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $todos = Todo::all();
        return view('welcome', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $todos = Todo::create($request->all());
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->status = true;
        $todo->save();
        return redirect()->route('todos.index');
    }



    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
