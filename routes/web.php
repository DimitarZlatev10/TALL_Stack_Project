<?php

use App\Http\Controllers\SessionsController;
use App\Livewire\About;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Watches\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/login', Login::class)->middleware('guest');
Route::get('/register', Register::class)->middleware('guest');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/watches', Index::class);
