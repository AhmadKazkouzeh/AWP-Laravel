@extends('layouts.app')
@section('content')
<div class="container">
    <div class="p m-5 text-center">
        <h1>Manage Emails (Contact US)</h1>
    </div>
</div>
@foreach ($contacts as $contact)
<a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$contact->id}}" style="float:right; color: white;" title="Delete Email From {{ $contact->name }}">
    Delete&#160;<i class="fas fa-trash-alt"></i>
</a>
    <br/>
    <!-- Modal -->
<div class="modal fade" id="exampleModal_{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to remove email from {{$contact->name}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a  href="{{ route('contact.delete', $contact->id) }}" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th class="table-active" scope="col">#</th>
            <th class="table-active" scope="row">{{$contact->id}}</th>
        </tr>
        <tr>
            <th scope="col">Name</th>
            <th >{{$contact->name}}</th >
        </tr>
        <tr>
            <th scope="col">Email</th>
            <th >{{$contact->email}}</th >
        </tr>
        <tr>
            <th scope="col">Phone Number</th>
            <th >{{$contact->phone_number}}</th >
        </tr>
        <tr>
            <th scope="col">Subject</th>
            <th >{{$contact->subject}}</th >
        </tr>
        <tr>
            <th scope="col">Message</th>
            <th >{{$contact->message}}</th >
        </tr>
        <tr>
            <th scope="col">Date</th>
            <th >{{$contact->created_at->format('d M Y')}}</th >
        </tr>
    </thead>
</table>
@endforeach
@endsection
