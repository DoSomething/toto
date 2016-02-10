<!DOCTYPE html>
<html>
<head>
  <title>Dorthy</title>
</head>
<body>
<div>
  <nav>
    <div>
      <div>
        <a href="{{ URL::to('messages') }}">Dorthy</a>
      </div>
      <ul>
        <li><a href="{{ URL::to('message') }}">View All Messages</a></li>
        <li><a href="{{ URL::to('message/create') }}">Create a Message</a></li>
      </ul>
    </div>
  </nav>

  <h1>@yield('title')</h1>

  <!-- will be used to show any messages -->
  @if (Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif

  @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
  @endif


  @yield('content')

</div>
</body>
</html>
