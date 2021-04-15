<?php

use Illuminate\Support\Facades\Route;


//Importation route home page
Route::get('/', function(){
    return view('pages/home');
});


//Importation route about-us page 
Route::get('/about-us', function(){
    return view('pages/about');
});