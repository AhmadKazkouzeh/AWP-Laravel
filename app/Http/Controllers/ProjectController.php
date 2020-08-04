<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }
    /**
     * Search function returns list of the Projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $projects = Project::where('title', 'like', '%' . $request->input('title_') . '%')->get();
        return view('projects.index', compact('projects'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.addNew');
    }

    /**
     * Store a newly created resource in storage.
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
            'about' => 'required'
        ]);
        // create new project into projects DB
        Project::create([
            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'posted_by' => $request->input('posted_by'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'about' => $request->input('about')
        ]);
        return redirect()->route("project.all");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd(Project::find($id));
        $project = Project::find($id);
        return view('projects.projectDetails', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.editProject', compact('project'));

    }
    /**
     * Update the specified resource in storage.
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
            'about' => 'required'
        ]);
        // update new project into projects DB ->
        DB::table('projects')
        ->whereId($id)
        ->update([
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'about' => $request->input('about')
        ]);
        return redirect()->route("project.all");
    }

    /**
     * Update the specified project status to 1.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($id)
    {
        DB::table('projects')
        ->whereId($id)
        ->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }

      /**
     * Update the specified project status to 0.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function notComplete($id)
    {
        DB::table('projects')
        ->whereId($id)
        ->update([
            'status' => '0'
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified projects and all the tasks belongs to it from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Project $project)
    {
        $project->tasks()->delete();
        $project->delete();
        return redirect()->back();
    }
}
