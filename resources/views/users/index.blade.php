<!-- list all the users here, this should probably be under admin/users
(and then displays only non-admins) -->

<h1>Users</h1>

<table>
	<tr>
		<th>User ID</th>
		<th>Name</th>
		<th>Slack Name</th>
		<th>Start Date</th>
	</tr>
  @foreach($users as $user)
    <tr>
		<td>{!! link_to_route('users.show', $user->id, [$user->id]) !!}
		<td>{!! $user->name !!}</td>
		<td> {!! $user->slack_name !!} </td>
		<td> {!! $user->start_date !!} </td>
    </tr>
  @endforeach
</table>
