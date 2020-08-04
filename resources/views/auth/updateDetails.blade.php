@extends('layouts.app')

@section('content')
<div class="container auth_container">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-7">
            <div class="card auth_card">
                <div class="card-header mb-3 auth_card_header">
                    <h4>{{ __('Update Details') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', Auth::user()->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}"
                                aria-describedby="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" value="{{ Auth::user()->email }}"
                                aria-describedby="email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg">Update</button>
                    </form>
                </div>
            </div>
            @if(Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status')}}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
