@extends('layouts.app')

@section('content')
<div class="alert alert-secondary m-4" role="alert">
    <div class="h3 text-center">You are currently editing: {{ $project->title}}</div>
 </div>
<form action="{{ route('project.edit', $project->id) }}" method="post">

    @include('projects.blocks.projectForm')
    <button type="submit" class="btn btn-dark float-right">Save and Finish</button>
</form>
@endsection
