@extends('layouts.app')
@section('content')
<div class="container">
    <div class="p m-5 text-center">
        <h1>Manage Users</h1>
    </div>
</div>
@include('admin.registartionChart', ['chart' => $chart])

@if(Session::has('status'))
<div class="alert alert-success">
    {{ Session::get('status')}}
</div>
@endif
<div class="row justify-content mt-2">
    <div class="col-md-12">
        <form action="{{ url('admin/allusers') }}" method="get">
            <div class="input-group mt-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" name="name_" id="name_" class="form-control" placeholder="User Title"
                    aria-label="name_" aria-describedby="basic-addon1">&#160;&#160;&#160;
                <button type="submit" class="btn btn-dark">Search</button>&#160;
                <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Clear Filter"
                    class="btn btn-dark btn-sm"><i style=" font-size: 1.8em; color:white;"
                        class="fas fa-sync-alt"></i></button>&#160;
            </div>
        </form>

        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">&#160;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <a style="float:right" title="Edit Details: {{ $user->name }}"
                            href="{{ route('user.edit', $user->id) }}"><i
                                style="padding-left:10px; font-size: 1.8em; color:black;" class="far fa-edit"></i></a>
                        <a  data-toggle="modal" data-target="#exampleModal_{{$user->id}}" style="float:right" title="Delete User {{ $user->name }}"><i
                                style="padding-left:10px; font-size: 1.8em; color:black;"
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to remove {{$user->name}}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a  href="{{ route('user.delete', $user->id) }}" type="button" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
