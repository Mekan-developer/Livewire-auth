<?php


use App\Livewire\Client\Index;
use App\Livewire\Dashboard\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');


Route::get('/dashboard', Home::class)->name('dashboard.home');

Route::get('/', Index::class)->name('client.index');



// Route::get('/', function () {
//     return view('welcome');
// });

// Fallback route for undefined routes
Route::fallback(function () {
    return redirect('/');
});