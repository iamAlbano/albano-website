<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::resource('/{lang?}', ContactController::class);
