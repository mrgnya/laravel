<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/sections', function () {
    return view('sections');
});
Route::get('/sections/{list}/', function ($list) {
        return view('list');
    });
Route::get('/sections/{list}/{film_name}', function ($list, $film_name) {
        return view('seasons');
    });
Route::get('/sections/{list}/{film_name}/{season?}', function ($list, $film_name, $season=null) {
        return view('film');
    });
Route::get('/sections/{list}/{film_name}/{season?}/{part?)', function ($list, $film_name, $season, $part) {
        return view('part');
    }); 

