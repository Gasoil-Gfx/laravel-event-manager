<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('events.index');
// });

Route::get('/', function () {
    return redirect()->route('events.index');
});

use App\Http\Controllers\EventController;

Route::resource('events', EventController::class);