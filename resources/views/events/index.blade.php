@extends('layout')

@section('title', 'Event List')

@section('content')




        <h1>Raves List</h1>
        <div class="buttons-row">
            <a class="add-btn" href="{{ route('events.create') }}"><i class="ri-sticky-note-add-fill"></i> New event</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th width="37%">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->price }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                      <a class="view-btn" href="{{ route('events.show', $event->id) }}">
                        <i class="ri-eye-2-fill"></i>
                        Details
                      </a>
                      <a class="edit-btn" href="{{ route('events.edit', $event->id) }}">
                        <i class="ri-edit-2-fill"></i>
                        Edit
                      </a>

                      <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="delete-btn">
                                <i class="ri-delete-bin-fill"></i>
                                Delete
                            </button>
                        </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
