<?php

use Illuminate\Support\Facades\Route;


//Importation to route 

Route::get('/', function(){
    return view('home');
});




Route::get('/about-us', function(){
    return view('about');
});