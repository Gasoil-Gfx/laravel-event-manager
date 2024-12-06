<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }


    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'tickets_available' => 'required|integer',
            'price' => 'required|numeric',
        ]);
    
        Event::create($request->all());
        return redirect()->route('events.index');
    }

    
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }


    
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }


    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'tickets_available' => 'required|integer',
            'price' => 'required|numeric',
        ]);
    
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect()->route('events.index');
    }

    
    public function destroy(string $id)
    {
        Event::findOrFail($id)->delete();
        return redirect()->route('events.index');
    }
}
