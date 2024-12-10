@extends('layout')

@section('title', 'Edit Event')

@section('content')
    <h1>Edit Event</h1>
    <div class="buttons-row">
        <a href="{{ route('events.index') }}" class="primary-btn back-btn">
            <i class="ri-arrow-go-back-fill"></i> Back
        </a>
    </div>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-box">
                <label for="name">Event Name</label>
                <input type="text" id="name" name="name" value="{{ $event->name }}" required>
            </div>
            <div class="form-box">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" value="{{ $event->date }}" required>
            </div>
            <div class="form-box">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="{{ $event->location }}" required>
            </div>
            <div class="form-box">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ $event->price }}" step="0.01" required>
            </div>
            <div class="form-box">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5">{{ $event->description }}</textarea>
            </div>
            <div class="form-box">
                <label for="tickets_available">Tickets Available</label>
                <input type="number" id="tickets_available" name="tickets_available" value="{{ $event->tickets_available }}" required>
            </div>
        </div>
        <div class="buttons-row">
            <button class="primary-btn save-btn" type="submit">
                <i class="ri-save-fill"></i> Update Event
            </button>
        </div>
    </form>
    

    <div class="buttons-row" style="position: relative;top: -43px;right: 130px;">
        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="form-delete-btn">
                <i class="ri-delete-bin-fill"></i> Delete
            </button>
        </form>
    </div>
@endsection
