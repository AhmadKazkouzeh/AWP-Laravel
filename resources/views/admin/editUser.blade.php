@extends('layouts.app')
@section('content')
<div class="row justify-content mt-2">
    <div class="col-md-12">
        <div class="alert alert-secondary m-4" role="alert">
            <div class="h3 text-center">You are currently editing: {{ $user->name}}</div>
         </div>
        <form action="{{ route('user.edit', $user->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                placeholder="Enter Project Title" value="{{ old('name') ?? ($user->name ?? '') }}" />
                @if ($errors->has('name'))
                <span class="text-danger">
                    {{ $errors->first('name') }}
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="start_date">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                value="{{ old('email') ?? ($user->email ?? '') }}" />
                @if ($errors->has('email'))
                <span class="text-danger">
                    {{ $errors->first('email') }}
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="status">Role</label>
                <select class="form-control" id="role" name="role" aria-describedby="role">
                    <option value="">Please Select</option>
                    <option name="role" aria-describedby="user" value="user" {{ ($user->role == 'user' ? 'selected' : '') }} >User</option>
                    <option name="role" aria-describedby="admin" value="admin" {{ ($user->role == 'admin'? 'selected' : '') }}>Admin</option>
                </select>

                @if ($errors->has('role'))
                <span class="text-danger">
                    {{ $errors->first('role') }}
                </span>
                @endif
            </div>
            <button type="submit" class="btn btn-dark float-right">Save and Finish</button>
        </form>
    </div>
</div>
@endsection
