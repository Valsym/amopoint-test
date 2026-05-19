<?php

use App\Models\Joke;

Route::get('/jokes', function () {
    return Joke::all();
});


