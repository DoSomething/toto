<h1>User: {{ $user->name }}</h1>

<div>
    <p><strong>User ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong>{{ $user->name }}</p>
    <p><strong>Slack Name:</strong>{{ $user->slack_name }}</p>
    <p><strong>Start Date:</strong>{{ $user->start_date }}</p>
</div>

<div>
    <p>{!! link_to_route('users.index', '<- Return to all users') !!}</p>
</div>
