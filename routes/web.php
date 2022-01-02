<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('base');
//});

Route::get('/',\App\Http\Livewire\HomeComponent::class)->name('home');
Route::get('/contact',\App\Http\Livewire\ContactComponent::class)->name('contact');
Route::get('/trending',\App\Http\Livewire\TrendingComponent::class)->name('trending');
