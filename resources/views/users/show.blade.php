<h1>User: {{ $user->name }}</h1>

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
