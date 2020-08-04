@extends('layouts.app')

@section('content')
<div class="alert alert-secondary m-4" role="alert">
    <div class="h3 text-center">New Project</div>
</div>
<form action="{{ route('project.addNew') }}" method="post">
    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}" />
    <input type="hidden" id="posted_by" name="posted_by" value="{{ Auth::user()->name }}" />

    @include('projects.blocks.projectForm')
    <button type="submit" class="btn btn-dark float-right">Create and Finish</button>
</form>

@endsection
