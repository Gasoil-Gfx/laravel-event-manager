@extends('layout')

@section('title', 'Show Event')

@section('content')
    <h1>Event Details</h1>
    <div class="buttons-row">
        <a class="back-btn" href="{{ route('events.index') }}"><i class="ri-arrow-go-back-fill"></i> Back</a>
    </div>
    <form>
        <div class="row">
            <div class="form-box">
                <label for="">Event Name</label>
                <input type="text" readonly value="{{ $event->name }}">
            </div>
            <div class="form-box">
                <label for="">Date</label>
                <input type="date" readonly value="{{ $event->date }}">
            </div>
            <div class="form-box">
                <label for="">Location</label>
                <input type="text" readonly value="{{ $event->location }}">
            </div>
            <div class="form-box">
                <label for="">Price</label>
                <input type="number" readonly value="{{ $event->price }}">
            </div>
            <div class="form-box">
                <label for="">Description</label>
                <textarea name="" id="" rows="5" readonly>{{ $event->description }}</textarea>
            </div>
            <div class="form-box">
                <label for="">Tickets Available</label>
                <input type="number" readonly value="{{ $event->tickets_available }}">
            </div>
        </div>
    </form>
    <div class="buttons-row">
        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="form-delete-btn">
                <i class="ri-delete-bin-fill"></i> Delete
            </button>
        </form>
    </div>
@endsection
