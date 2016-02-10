@extends('layouts.master')

@section('title', 'Edit Message - Message name')

@section('content')

<p class="lead">Edit this message below. <a href="{{ route('message.index') }}">Go back to all tasks.</a></p>
<hr>

{!! Form::model($message, [
    'method' => 'PATCH',
    'route' => ['message.update', $message->id]
]) !!}

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

{!! Form::submit('Update Message', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
