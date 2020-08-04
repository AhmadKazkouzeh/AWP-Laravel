@extends('layouts.app')

@section('content')
<h3 class="text-center">Add New Task</h3>
<form action="{{ route('task.edit', $task->id) }}" method="post">
    @csrf
    @include('tasks.blocks.taskForm')
    <button type="submit" class="btn btn-dark float-right">Save</button>
</form>
@endsection
