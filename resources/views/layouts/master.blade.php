<!DOCTYPE html>
<html>
<head>
    <title>Dorthy</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/vendor/forge/forge.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/vendor/forge/forge.js"></script>
</head>
<body>
<div class="chrome">
    <div class="wrapper">
        <nav class="navigation -white -floating">
            <a class="navigation__logo" href="{{ URL::to('message') }}"><span>DoSomething.org</span></a>
            <a class="navigation__toggle js-navigation-toggle" href="#"><span>Show Menu</span></a>
            <div class="navigation__menu">
                <ul class="navigation__primary">
                    <li>
                        <a href="{{ URL::to('message') }}">
                            <strong class="navigation__title">View All Messages</strong>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('message/create') }}">
                            <strong class="navigation__title">Create a Message</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <header role="banner" class="header">
            <div class="wrapper">
                <h1 class="header__title">@yield('title')</h1>
                <p class="header__subtitle">@yield('subtitle')</p>
            </div>
        </header>
        <div class="container">
            <div class="wrapper">
                <div class="container__block">
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
            </div>
        </div>
        <footer class="footer">
            <div class="footer__columns">
                <div class="footer__column -social">
                    <p>I bless the rains down in Africa</p>
                </div>
            </div>
            <div class="footer__subfooter">
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
