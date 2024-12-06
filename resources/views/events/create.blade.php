@extends('layout')

@section('title', 'Create Event')

@section('content')
 <!-- Display Validation Errors -->
 @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Event Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="date">Event Date:</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}" required>
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="tickets_available">Tickets Available:</label>
            <input type="number" id="tickets_available" name="tickets_available" value="{{ old('tickets_available') }}" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('events.index') }}">Cancel</a>
    </form>
@endsection
