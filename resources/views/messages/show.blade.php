@extends('layouts.master')

@section('title', 'Message ' . $message->id)

@section('content')

<ul>
  <li>Message Body: {{ $message->message }}</li>
  <li>Day to send: {{ $message->day_to_send }}</li>
  <li>Time to Send: {{ $message->time_to_send }}</li>
  <li>Tags: {{ $message->tags }}</li>
</ul>

<div>
    {!! Form::open(['method' => 'DELETE','route' => ['message.destroy', $message->id]]) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
</div>

@stop
