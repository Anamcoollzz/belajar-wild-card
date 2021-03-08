<?php

use App\Http\Middleware\UjiCoba;
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

Route::get('/', function () {
    return route('dashboard');
})->name('dashboard');

Route::domain('{account}.contoh.aksiberbagi.com')->group(function () {
    Route::middleware(UjiCoba::class)->group(function () {
        Route::get('hehe', function ($account) {
            return $account;
        })->name('dashboard');
    });
});

Route::get('hahahah', function () {
    return 'hahahah';
})->name('dashboard');
