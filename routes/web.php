<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', HomeController::class);
Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::middleware('auth')->group(function(){
	Route::resource('tasks', TaskController::class);
	Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function(){
	Route::get('register', [RegisterController::class, 'create'])->name('register');
	Route::post('register', [RegisterController::class, 'store'])->name('register');

	Route::get('login',[LoginController::class, 'create'])->name('login');
	Route::post('login',[LoginController::class, 'store'])->name('login');	
});


// Route::get('contact', [ContactController::class, 'create']);
// Route::post('contact', [ContactController::class, 'store']);
// Route::get('profile/{identifier}', [ProfileInformationController::class,'__invoke']);
// Route::get('tasks',[TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);


// Route::get('/', fn()=>view('home'));
// Route::view('profile','profile');
Route::view('about','about');
// Route::view('contact','contact');
// Route::get('profile/{username}', function($username){
// 	return view('profile', ['name'=>$username]);
// });