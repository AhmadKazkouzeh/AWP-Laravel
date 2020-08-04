<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new task.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('tasks.addNewTask', compact('project'));
    }

    /**
     * Store a newly created task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        Task::create([
            'project_id' => $request->input('project_id'),
            'user_id' => $request->input('user_id'),
            'posted_by' => $request->input('posted_by'),
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'description' => $request->input('description')
        ]);
        $project = Project::find($request->input('project_id'));
        return redirect()->route("project.tasks", $project);
    }

    /**
     * Display the specified task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project){
        return view('tasks.index', compact('project'));
    }

    /**
     * Show the form for editing the specified task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $task = Task::find($id);
        return view('tasks.editTask', compact('task'));
    }
    public function display($id)
    {
        $task = Task::find($id);
        return view('tasks.taskDetails', compact('task'));
    }

    /**
     * Update the specified task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        $task = Task::find($id);
        $task->update([
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'description' => $request->input('description')
        ]);
        return redirect()->route("project.tasks", $task->project);
    }

     /**
     * Update the specified task status to 1 in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($id)
    {
        DB::table('tasks')
        ->whereId($id)
        ->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }

     /**
     * Update the specified task status to 0 in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function notComplete($id)
    {
        DB::table('tasks')
        ->whereId($id)
        ->update([
            'status' => '0'
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified task from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
