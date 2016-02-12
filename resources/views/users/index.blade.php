@extends('layouts.master')

@section('title', 'Users')

@section('content')

@foreach($users as $user)
    <div class="message__row">
        <div class="container__block -half message__title">
            <p><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></p>
        </div>
        <div class="container__block -half message__edit">
            <ul class="form-actions -inline">
                <li>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id]]) !!}
                    {!! Form::submit('Delete', array('class' => 'button -secondary delete')) !!}
                    {!! Form::close() !!}
                </li>
                <li>
                    <a href="{{ route('users.edit', $user->id) }}" class="button -secondary">Edit User</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
@endforeach

@stop
