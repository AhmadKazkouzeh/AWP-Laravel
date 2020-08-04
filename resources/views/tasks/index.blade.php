@extends('layouts.app')

@section('content')
<div class="container-fluid m-3">
        <div class="col-md-12 text-left">
            <a class="btn btn-dark" href="{{ route('project.all') }}">
                <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> Back
            </a>
        </div>
    </div>
<div class="container">
    <div class="p m-5 text-center">
        <h1>AWP Manage Less & Do More</h1>
    </div>
    <div class="p m-4 text-center">
        <h4>Create and Mange Your Project Tasks Here - <b>{{ $project-> title}}</b></h4>
    </div>
    <div class="container-fluid ">
        <div class="col-md-12 text-center">
            <a class="btn btn-dark btn-lg" style="width:50%" href="{{ route('project.addNewTask', $project->id) }}">Add New Task</a>
        </div>
    </div>
</div>
<br/><br/>
@include('searchTemplate')
<div class="row mt-3">
    @foreach ($project -> tasks as $task)
    @include("tasks.blocks.taskTemplate")
    @endforeach
</div>
<div class="alert">
</div>
@endsection
