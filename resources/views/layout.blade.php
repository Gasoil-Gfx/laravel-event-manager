<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>@yield('title', 'Event Manager')</title>
</head>
<body>
    <!-- Navbar -->

    <nav>
      <a href="{{ route('events.index') }}"><img src="{{ asset('img/logo.svg') }}" class="logo" alt="glitz logo">
      </a>
    </nav>

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
