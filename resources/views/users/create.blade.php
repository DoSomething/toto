@extends('layouts.master')

@section('title', 'Create User')

@section('content')

<div class='container__block'>
    <div class='wrapper'>
        {!! Form::open(['route' => 'users.store']) !!}

            <div class="form-item">
                {!! Form::label('name', 'Name: ', array('class' => 'field-label')) !!}
                {!! Form::text('name', NULL, array('class' => 'text-field')) !!}
            </div>

            <div class="form-item">
                {!! Form::label('slack_name', 'Slack Name: @', array('class' => 'field-label')) !!}
                {!! Form::text('slack_name', NULL, array('class' => 'text-field')) !!}
            </div>

            <div class="form-item">
                {!! Form::label('start_date', 'Start Date: ', array('class' => 'field-label')) !!}
                {!! Form::date('start_date', NULL, ['class' => 'text-field', 'placeholder' => 'MM/DD/YYYY']) !!}
            </div>

            <div class="form-item">
                {{ Form::submit('Create User', array('class' => 'button')) }}
            </div>

        {!! Form::close() !!}
    </div>
</div>

@stop
