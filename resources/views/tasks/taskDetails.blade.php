@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary m-4" role="alert">
               <div class="h3 text-center">You are currently viewing task: {{ $task->title}}</div>
            </div>
            <table class="table">
                <tr>
                    <th scope="col">Start Date: </th>
                    <td> {{ $task->start_date}}</td>
                </tr>
                <tr>
                    <th scope="col">End Date: </th>
                    <td>{{ $task->end_date}}</td>
                </tr>
                <tr>
                        <th scope="col">Category: </th>
                        <td>{{ $task->category}}</td>
                    </tr>
                <tr>
                    <th scope="col">Status: </th>
                    <td class="{{ $task->status ? " text-success" : " text-danger" }}">{{ $task->status ? " Completed" : "Started"}}</td>
                </tr>
                <tr>
                    <th scope="col">Description: </th>
                    <td>{{ $task->description}}</td>
                </tr>
                <tr>
                    <th scope="col">Created By: </th>
                    <td>{{ $task->posted_by}}</td>
                </tr>
                <tr>
                    <td scope="col"></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>

@endsection
