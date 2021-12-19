<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;



Route::get('/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('welcome');
});
