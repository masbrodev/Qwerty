<?php

use Illuminate\Http\Request;


Route::get('/users', function () {
    return new UserCollection(User::all());
});
