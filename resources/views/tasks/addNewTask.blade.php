@extends('layouts.app')

@section('content')
<h3 class="text-center">Add New Task</h3>
<form action="{{ route('project.addNewTask', $project->id) }}" method="post">
    <input type="hidden" id="project_id" name="project_id" value="{{ $project->id }}" />
    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}" />
    <input type="hidden" id="posted_by" name="posted_by" value="{{ Auth::user()->name }}" />


    @csrf
    @include('tasks.blocks.taskForm')
    <button type="submit" class="btn btn-dark float-right">Create</button>
</form>
@endsection
