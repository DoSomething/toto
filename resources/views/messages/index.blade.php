@extends('layouts.master')

@section('title', 'All messages')

@section('content')

@foreach($messages as $message)
    <div class="message__row">
        <h3><a href="{{ route('messages.show', $message->id) }}">{{ $message->title }}</a></h3>
        <div class="container__block -half message__title">
            <p>{{ $message->message }}</p>
        </div>
        <div class="container__block -half message__edit">
            <ul class="form-actions -inline">
                <li>
                    {!! Form::open(['method' => 'DELETE','route' => ['messages.destroy', $message->id]]) !!}
                    {!! Form::submit('Delete', array('class' => 'button -secondary delete')) !!}
                    {!! Form::close() !!}
                </li>
                <li>
                    <a href="{{ route('messages.edit', $message->id) }}" class="button -secondary">Edit message</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
@endforeach

@stop
