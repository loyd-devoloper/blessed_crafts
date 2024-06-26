<?php

use App\Livewire\Customer\Homepage;
use App\Livewire\Product\View;
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

Route::get('/',Homepage::class)->name('home');
Route::get('/product/{name}',View::class)->name('product.view');

