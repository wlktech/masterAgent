<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;



Auth::routes();
// Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/register', function () {
    abort(404);
});
Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/admins', [AdminController::class,'admin'])->name('adminList');
    Route::get('/masters', [AdminController::class,'master'])->name('masterList');
    Route::get('/agents', [AdminController::class,'agent'])->name('agentList');
    Route::get('/agents/create', [AdminController::class,'agent_create'])->name('agent_create');
    Route::post('/agents/create', [AdminController::class,'agent_store'])->name('agent_create');
    Route::get('/users', [AdminController::class,'user'])->name('userList');
    Route::get('/users/create', [AdminController::class,'user_create'])->name('user_create');
    Route::post('/users/create', [AdminController::class,'user_store'])->name('user_create');
});
