@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Subject:</strong> {{ $msg->subject }}<span class="float-right"><strong>From:</strong> {{ $msg->userFrom->name }}, {{ $msg->userFrom->email }}</span></div>

                <div class="card-body">
                    <strong>Message:</strong>
                    <br><br>
                    {{ $msg->body }}
                    <hr>
                    <a href="{{route('create',[$msg->userFrom->id, $msg->subject]) }}" class="btn btn-primary">Reply</a>
                    <a href="{{route('delete',$msg->id) }}" class="btn btn-danger float-right">Delete</a>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
