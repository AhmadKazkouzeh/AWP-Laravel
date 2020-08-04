@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p text-center">
        <h1>Interim Admin Dashboard</h1>
    </div>
    <br/><br/>
    <div class="row justify-content-center ">
        <div class="form-row">
            <a class="btn btn-dark btn-lg" href="{{ route('contacts') }}">{{ __('View Emails') }}&#160;<i class="fas fa-envelope"></i>
            </a>
            &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <a class="btn btn-dark btn-lg" href="{{ route('allusers') }}">{{ __('View Users') }} &#160;<i class="fas fa-users"></i>
            </a>
        </div>
    </div>
</div>
@endsection
