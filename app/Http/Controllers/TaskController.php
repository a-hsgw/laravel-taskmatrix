<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Importance;
use App\Models\Pend;
use App\Models\Urgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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

        return view('tasks.index', compact('tasks', 'pend', 'done'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Importance $importance, Urgency $urgency, Pend $pend)
    {
        $request->validate([
            'task' => 'required',
        ]);

        $task = new Task();
        // 新しい内容を詰め込んで
        $task->task = $request->input('task');
        $task->importance_id = $importance->id;
        $task->urgencies_id	 = $urgency->id;
        $task->done = false;
        $task->pend = false;
        $task->user_id = Auth::id();
        // 登録する
        $task->save();
        
        return to_route('task.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Importance $importance, Urgency $urgency, Pend $pend)
    {
        $request->validate([
            'task' => 'required',
        ]);

        $task = new Task();
        // 新しい内容を詰め込んで
        $task->task = $request->input('task');
        $task->importance_id = $importance->id;
        $task->urgencies_id	 = $urgency->id;
        $task->done = false;
        $task->pend = false;
        $task->user_id = Auth::id();
        // 登録する
        $task->save();
        
        return to_route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return to_route('task.index');
    }
}
