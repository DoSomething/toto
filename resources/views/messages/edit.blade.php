@extends('layouts.master')

@section('title', 'Edit '. $message->title)

@section('content')
<div class='container__block'>
    <div class='wrapper'>
        <p>Edit this message below. <a href="{{ route('messages.index') }}">Go back to all messages.</a></p>
    </div>
</div>
<div class='container__block'>
    <div class='wrapper'>
        {!! Form::model($message, ['method' => 'PATCH','route' => ['messages.update', $message->id]]) !!}
            <div class="form-item">
                {{ Form::label('title', 'Title:', array('class' => 'field-label')) }}
                {{ Form::text('title', NULL, array('class' => 'text-field')) }}
            </div>

            <div class="form-item">
                {{ Form::label('message', 'Message:', array('class' => 'field-label')) }}
                {{ Form::text('message', NULL, array('class' => 'text-field')) }}
            </div>

            <?php //@TODO add some help text ?>
            <div class="form-item">
                {{ Form::label('day_to_send', 'Day to send:', array('class' => 'field-label')) }}
                {{ Form::text('day_to_send', NULL, array('class' => 'text-field')) }}
            </div>

            <?php //@TODO add some help text ?>
            <div class="form-item">
                {{ Form::label('tags', 'Tags:', array('class' => 'field-label')) }}
                {{ Form::text('tags', NULL, array('class' => 'text-field')) }}
            </div>

        {!! Form::submit('Update Message', ['class' => 'button']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop
