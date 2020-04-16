@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Inbox</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($messages) > 0 )
                    <ul class="list-group">
                        @foreach($messages as $message)
                            <li class="list-group-item">
                                <strong>From: {{ $message->userFrom->name }}, {{ $message->userFrom->email }}</strong> | Subject: {{ $message->subject }}
                                <a href="{{route('restore',$message->id) }}" class="btn btn-info float-right">Restore</a>
                            </li>
                        @endforeach
                    </ul>
                    @else
                    No Messages Deleted
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
