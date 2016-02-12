<!-- <h1>User: {{ $user->name }}</h1>

<div>
    <p><strong>User ID: </strong> {{ $user->id }}</p>
    <p><strong>Name: </strong>{{ $user->name }}</p>
    <p><strong>Slack Name: </strong>{{ $user->slack_name }}</p>
    <p><strong>Start Date: </strong>{{ $user->start_date }}</p>
</div>

<div>
    <a href="{{ route('users.edit', $user->id) }}">Edit user</a>
</div>

<br>

<div>
    <a href="{{ route('users.index') }}">&larr; Return to all users</a>
</div>
 -->
@extends('layouts.master')

@section('title', $user->name)

@section('content')

<ul>
    <li class='container__block'>
        <h2 class="heading -beta"><span>User info</span></h2>
    </li>
    <li class='container__block'>
        <p><strong>User ID: </strong> {{ $user->id }}</p>
        <p><strong>Name: </strong>{{ $user->name }}</p>
        <p><strong>Slack Name: </strong>{{ $user->slack_name }}</p>
        <p><strong>Start Date: </strong>{{ $user->start_date }}</p>
    </li>
</ul>

<ul class="form-actions -inline">
    <li>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id]]) !!}
        {!! Form::submit('Delete', array('class' => 'button delete')) !!}
        {!! Form::close() !!}
    </li>
    <li>
        <a href="{{ route('users.edit', $user->id) }}" class="button">Edit user</a>
    </li>
</ul>

@stop
