<p>U R now editin': {{ $user->name }}</p>

{!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}

	<div>
		{!! Form::label('name', 'Name: ') !!}
		{!! Form::input('text', 'name', null) !!}
	</div>

	<div>
		{!! Form::label('slack_name', 'Slack Name: @') !!}
		{!! Form::input('text', 'slack_name', null, ['placeholder' => 'whatever']) !!}
	</div>

	<div>
		{!! Form::label('start_date', 'Start Date: ') !!}
		{!! Form::input('date', 'start_date', null, ['placeholder' => 'MM/DD/YYYY']) !!}
	</div>

	<div>
		{!! Form::submit('Update User') !!}
	</div>

{!! Form::close() !!}