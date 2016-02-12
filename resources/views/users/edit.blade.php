@extends('layouts.master')

@section('title', 'Edit '. $user->name)

@section('content')
<div class='container__block'>
    <div class='wrapper'>
        <p>Edit this user below. <a href="{{ route('messages.index') }}">Go back to all users.</a></p>
    </div>
</div>
<div class='container__block'>
    <div class='wrapper'>
        {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}

            <div class="form-item">
                {!! Form::label('name', 'Name: ', array('class' => 'field-label')) !!}
                {!! Form::text('name', NULL, array('class' => 'text-field')) !!}
            </div>

            <div class="form-item">
                {!! Form::label('slack_name', 'Slack Name: (@)', array('class' => 'field-label')) !!}
                <div class="user__slack_field">
                    {!! Form::text('slack_name', NULL, array('class' => 'text-field')) !!}
                </div>
            </div>

            <div class="form-item">
                {!! Form::label('start_date', 'Start Date: ', array('class' => 'field-label')) !!}
                {!! Form::text('start_date', NULL, ['class' => 'text-field', 'placeholder' => 'MM/DD/YYYY']) !!}

            </div>

            <div class="form-item">
                {!! Form::submit('Update User',  ['class' => 'button']) !!}
            </div>

        {!! Form::close() !!}
    </div>
</div>

@stop
