<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Importance;
use App\Models\Pend;
use App\Models\Urgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Auth::user()->tasks;
        $pend =  Task::whereNotNull('pend')->get();
        $done =  Task::whereNotNull('done')->get();

        return view('pends.index', compact('tasks', 'pend', 'done'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pend  $pend
     * @return \Illuminate\Http\Response
     */
    public function show(Pend $pend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pend  $pend
     * @return \Illuminate\Http\Response
     */
    public function edit(Pend $pend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pend  $pend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pend $pend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pend  $pend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pend $pend)
    {
        //
    }
}
