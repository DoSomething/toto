@if (Session::has('status'))
    <div class="alert alert-info">{{ Session::get('status') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<h1>Create Message</h1>

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

<?php /*
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif*/ ?>