@extends('layouts.app')

@section('content')
<div class="container auth_container">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-7">
            <div class="card auth_card animated bounceInRight">
                <div class="card-body">
                    <div class="p m-5 text-center">
                        <h1>AWP Collaborative Project Management</h1>
                    </div>
                    <div class="p m-4 text-center">
                        <h4>Open source project management software.
                            <br/>Easy-to-use.</h4>
                    </div>
                    <div class="container-fluid">
                            <div class="col-md-12 text-center">
                                <a class="btn btn-dark btn-lg m-4" style="width:50%" href="{{ route('project.all') }}">
                                    Get Started <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
