<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
    	return view('tasks.index', [
            'task' => new Task,
            'submit'=>'Create',
            'tasks'=>Task::orderBy('id','desc')->get()
        ]);
    }

    public function store(TaskRequest $request)
    {
    	Task::create($request->all());

    	return back();
    }
    
    public function edit(Task $task)
    {
        // $task = Task::where('id', $id)->first();
    	// $task = Task::find($id);
    	return view('tasks.edit', [
            'submit'=>'Update',
            'task'=>$task,
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
    	Task::find($id)->update(['list'=>$request->list]);
    	return redirect('tasks');
    }

    public function destroy($id)
    {
    	Task::find($id)->delete();
    	return back();
    }
}
