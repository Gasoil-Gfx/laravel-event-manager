<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title', 'Event Manager')</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="{{ route('events.index') }}">Home</a> |
        <a href="{{ route('events.create') }}">Create New Event</a>
    </nav>

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
