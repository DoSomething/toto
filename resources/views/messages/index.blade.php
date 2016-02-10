@extends('layouts.master')

@section('title', 'Edit Message - Message name')

@section('content')

@foreach($messages as $message)
    <h3>{{ $message->title }}</h3>
    <p>{{ $message->message }}</p>
    <p>
        <a href="{{ route('message.show', $message->id) }}" class="btn btn-info">View message</a>
        <a href="{{ route('message.edit', $message->id) }}" class="btn btn-primary">Edit message</a>
    </p>
    <hr>
@endforeach

@stop
