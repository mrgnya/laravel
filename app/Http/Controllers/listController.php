<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
class listController extends Controller
{
    public function showFilms(Request $request){
        $films = new FIlm();
        $films->title = $request->title;
        $films->description = $request->description;
    }
}
