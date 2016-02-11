@extends('layouts.master')

@section('title', 'All messages')

@section('content')

@foreach($messages as $message)
    <div class="message__row">
        <h3><a href="{{ route('message.show', $message->id) }}">{{ $message->title }}</a></h3>
        <div id='message__title' class="container__block -half">
            <p>{{ $message->message }}</p>
        </div>
        <div id='message__edit' class="container__block -half">
            <p>
                <a href="{{ route('message.edit', $message->id) }}" class="button -secondary">Edit message</a>
            </p>
        </div>
    </div>
    <hr>
@endforeach

@stop
