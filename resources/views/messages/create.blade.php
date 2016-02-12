@extends('layouts.master')

@section('title', 'Create Message')

@section('content')

<div class='container__block'>
    <div class='wrapper'>
        {!! Form::open(array('route' => 'messages.store')) !!}
            <div class="form-item">
                {{ Form::label('title', 'Title:', array('class' => 'field-label')) }}
                {{ Form::text('title', NULL, array('class' => 'text-field')) }}
            </div>

            <div class="form-item">
                {{ Form::label('message', 'Message:', array('class' => 'field-label')) }}
                {{ Form::textarea('message', NULL, array('class' => 'text-field')) }}
            </div>

            <?php // add some help text ?>
            <div class="form-item">
                {{ Form::label('day_to_send', 'Day to send:', array('class' => 'field-label')) }}
                {{ Form::text('day_to_send', NULL, array('class' => 'text-field')) }}
            </div>

            <?php // add some help text ?>
            <div class="form-item">
                {{ Form::label('tags', 'Tags:', array('class' => 'field-label')) }}
                {{ Form::text('tags', NULL, array('class' => 'text-field')) }}
            </div>

            <div class="form-item">
                <div class="select">
                    {{ Form::label('type', 'Type:', array('class' => 'field-label')) }}
                    {{ Form::select('type', ['schedule', 'fetch']) }}
                </div>
            </div>

            <div class="form-item">
                {{ Form::submit('Submit', array('class' => 'button')) }}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@stop
