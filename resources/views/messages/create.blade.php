@extends('layouts.master')

@section('title', 'Create Message')

@section('content')

{!! Form::open(array('route' => 'message.store')) !!}
    <ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('message', 'Message:') }}
            {{ Form::text('message') }}
        </li>

        <?php // add some help text ?>
        <li>
            {{ Form::label('day_to_send', 'Day to send:') }}
            {{ Form::text('day_to_send') }}
        </li>

        <?php // add some help text ?>
        <li>
            {{ Form::label('tags', 'Tags:') }}
            {{ Form::text('tags') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{!! Form::close() !!}

@stop
