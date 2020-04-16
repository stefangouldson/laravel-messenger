@extends('layouts.app')

@section('content')
    <div class="container">

        {{ Form::open(['action' => 'MessagesController@store', 'method' => 'post']) }}
        @csrf

        <div class="form-group">
            <label for="to">Send To</label>
            <select class="form-control" name="to">
                @if(count($users)>1)
                <option disabled selected hidden>Select User</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}, {{ $user->email }}</option>
                @endforeach
                @else
                @foreach($users as $user)
                <option selected value="{{ $user->id }}">{{ $user->name }}, {{ $user->email }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Enter Subject" class="form-control" value="{{ $subject }}">
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" placeholder="Enter Message" class="form-control" rows='3'></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        {{ Form::close() }}

    </div>
@endsection
