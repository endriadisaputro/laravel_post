<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
    	return view('tasks.index', ['tasks'=>Task::orderBy('id','desc')->get()]);
    }

    public function store(Request $request)
    {
    	$task = Task::create($request->all());

    	return back();
    }
    
    public function edit($id)
    {
        // $task = Task::where('id', $id)->first();
    	$task = Task::find($id);
    	return view('tasks.edit', ['task'=>$task]);
    }

    public function update(Request $request, $id)
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
