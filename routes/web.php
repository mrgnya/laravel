<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/{list}', function ($list) {
        return view('list');
    });
Route::get('/{list}/{film_name}', function ($list, $film_name) {
        return view('seasons');
    });
Route::get('/{list}/{film_name}/{season?}', function ($list, $film_name, $season=null) {
        return view('film');
    });
Route::get('/{list}/{film_name}/{season?}/{part?)', function ($list, $film_name, $season, $part) {
        return view('part');
    }); 

