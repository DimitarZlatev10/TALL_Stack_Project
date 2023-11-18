<?php

use App\Http\Controllers\SessionsController;
use App\Livewire\About;
use App\Livewire\Cart;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Watches\Index;
use App\Livewire\Watches\Show;
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

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/login', Login::class)->middleware('guest')->name('login');
Route::get('/register', Register::class)->middleware('guest')->name('register');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('/cart', Cart::class)->middleware('auth')->name('cart');

Route::get('/watches', Index::class)->name('watches');
Route::get('/watches/{watch:slug}', Show::class)->name('watch');
