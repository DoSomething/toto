@extends('layouts.master')

@section('title', $message->title)

@section('content')

<ul>
    <li class='container__block'>
        <div class="wrapper">
            <h2 class="heading -gamma"><span>Message</span></h2>
            <p>{{ $message->message }}</p>
        </div>
    </li>
    <li class='container__block'>
        <h2 class="heading -delta"><span>Day to send message: </span>{{ $message->day_to_send }}</h2>
        @if(strlen($message->tags) > 0)
            <h2 class="heading -delta"><span>Tags: </span>{{ $message->tags }}</h2>
        @endif
    </li>
</ul>

<ul class="form-actions -inline">
    <li>
        {!! Form::open(['method' => 'DELETE','route' => ['message.destroy', $message->id]]) !!}
        {!! Form::submit('Delete', array('class' => 'button', 'id' => 'delete')) !!}
        {!! Form::close() !!}
    </li>
    <li>
        <a href="{{ route('message.edit', $message->id) }}" class="button">Edit message</a>
    </li>
</ul>

@stop
