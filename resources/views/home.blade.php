@extends('layouts.app')

@section('content')
<div class="container auth_container">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-7">
            <div class="card auth_card">
                <div class="card-header mb-3 auth_card_header"><h4>Status</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                           Dear {{ Auth::user()->name }}, you are logged in successfully <br/><br/>
                           <a class="btn btn-success" href="{{ route('project.all') }}">{{ __('View Available Projects') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
