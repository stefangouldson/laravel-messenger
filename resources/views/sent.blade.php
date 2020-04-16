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
                            <strong>to: {{ $message->userTo->name }}, {{ $message->userTo->email }}</strong> | Subject: {{ $message->subject }}
                            @if ($message->deleted)
                                <span class="badge badge-danger float-right">DELETED</span>
                            @elseif($message->read)
                                <span class="badge badge-success float-right">READ</span>
                            @else
                                <span class="badge badge-warning float-right">SENT</span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @else
                    No Messages
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

