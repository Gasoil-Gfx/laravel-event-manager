@extends('layout')

@section('title', 'Edit Event')

@section('content')
<h1>Edit Event</h1>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Event Name:</label>
        <input type="text" id="name" name="name" value="{{ $event->name }}" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $event->date }}" required><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ $event->location }}" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $event->description }}</textarea><br><br>

        <label for="tickets_available">Tickets Available:</label>
        <input type="number" id="tickets_available" name="tickets_available" value="{{ $event->tickets_available }}" required><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $event->price }}" step="0.01" required><br><br>

        <button type="submit">Update Event</button>
        <a href="{{ route('events.index') }}">Cancel</a>
    </form>
@endsection
