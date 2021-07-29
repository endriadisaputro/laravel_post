<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn()=>view('home'));
Route::view('profile','profile');
Route::view('about','about');
Route::view('contact','contact');