<!-- list all the users here, this should probably be under admin/users
(and then displays only non-admins) -->


<tbody>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->id  }}</td>
      <td>{{ $user->name  }}</td>
      <td> {{{ $user->slack_name }}} </td>
      <td> {{{ $user->start_date }}} </td>
  @endforeach
</tbody>
