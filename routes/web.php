<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/{list}', function ($list) {
    if($list=='registration'){
        return view('reg');
    }elseif($list=='login'){
        return view('log');
    }elseif($list=='feedback'){
        return view('fb');
    }elseif($list=='admin'){
        return view('admin');
    }else
        return view('list');
    });
Route::get('/{list}/{film_name}', function ($list, $film_name) {
        return view('list');
    });
Route::get('/{list}/{film_name}/{season}', function ($list, $film_name) {
        return view('list');
    });
Route::get('/{list}/{film_name}/{season}/{part}', function ($list, $film_name, $season, $part) {
        return view('part');
    }); 

