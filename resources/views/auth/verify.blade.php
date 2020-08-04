@extends('layouts.app')

@section('content')
<div class="container auth_container">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-7">
            <div class="card auth_card">
                <div class="card-header mb-3 auth_card_header"><h4>{{ __('Verify Your Email Address') }}</h4></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
