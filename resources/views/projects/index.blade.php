@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p m-5 text-center">
        <h1>Make more time for the work that matters most</h1>
    </div>
    <div class="p m-4 text-center">
        <h4> AWP is the work management system teams use to stay focused on the projects,
            and daily tasks that grow your business.</h4>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 text-center">
            <a class="btn btn-dark btn-lg m-4" style="width:50%" href="{{ route('project.addNew') }}">Add New
                Project</a>
        </div>
    </div>
</div>
<form action="{{ url('project/all') }}" method="get">
    <div class="input-group m-3 ">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" name="title_" id="title_" class="form-control" placeholder="Project Title" aria-label="title_"
            aria-describedby="basic-addon1">&#160;&#160;&#160;
        <button type="submit" class="btn btn-dark">Search</button>&#160;
        <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Clear Filter" class="btn btn-dark btn-sm" ><i style=" font-size: 1.8em; color:white;" class="fas fa-sync-alt"></i></button>&#160;

        <a id="search_tip"data-toggle="tooltip" data-placement="right" title="Live Filter" onclick="viewSearch();" class="btn btn-dark btn-sm" ><i style=" font-size: 1.8em; color:white;" class="fas fa-list"></i></a>
    </div>
</form>
<div class="search_tem" style="display: none;">
    @include('searchTemplate')
</div>

<div class="row">
    @foreach ($projects as $project)
    <div id="{{ $project->id }}" class="card m-3 animated bounceInLeft" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title}}
                <a style="float:right" title="Edit Project {{ $project->title }}"
                    href="{{ route('project.edit', $project->id) }}"><i
                        style="padding-left:10px; font-size: 1.8em; color:black;" class="far fa-edit"></i></a>
                <a style="float:right" title="Delete Project {{ $project->title }}"
                    href="{{ route('project.delete', $project->id) }}"><i
                        style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-trash-alt"></i></a>
                <a style="float:right" title="Print Project {{ $project->title }}"
                    href="{{ route('project.show', $project->id)}}"><i
                        style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-print"></i></a>
            </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Start Date: <span class="startDate">{{ $project->start_date}}</span></li>
            <li class="list-group-item">End Date: <span class="endDate">{{ $project->end_date}}</span></li>
            <li class="status list-group-item {{ $project->status ? " text-success" : " text-danger" }}">Status:
                {{ $project->status ? " Completed" : "  Started"}}
                @if($project->status == "0")
                <a style="float:right" title="Mark {{ $project->title }} Complete"
                    href="{{ route('project.complete', $project->id)}}"><i
                        style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-lock-open"></i></a>
                @else
                <a style="float:right" title="Mark {{ $project->title }} Uncomplete"
                    href="{{ route('project.notComplete', $project->id)}}"><i
                        style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-lock"></i></a>
                @endif
            </li>
            <li class="list-group-item">Number of Current Tasks: {{ $project->tasks()->count()}}</li>
            <li class="list-group-item">Created By: {{ $project->posted_by}}</li>

        </ul>
        <div class="card-body">
            <a title="Manage tasks of {{ $project->title }}" href="{{ route('project.tasks', $project->id) }}"
                class="card-link manage_link">Manage Project Tasks
                &#160;&#160;&#160;&#160;<i class="fas fa-cogs" style="font-size: 1.3em;"></i>

            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
