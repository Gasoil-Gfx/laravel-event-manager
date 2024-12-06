<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
</head>
<body>
    <h1>Event Details</h1>
    <p><strong>Name:</strong> {{ $event->name }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>Description:</strong> {{ $event->description }}</p>
    <p><strong>Tickets Available:</strong> {{ $event->tickets_available }}</p>
    <p><strong>Price:</strong> {{ $event->price }}</p>

    <a href="{{ route('events.edit', $event->id) }}">Edit Event</a>
    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Event</button>
    </form>
    <a href="{{ route('events.index') }}">Back to Events</a>
</body>
</html>
