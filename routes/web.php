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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/works', [App\Http\Controllers\WorkController::class, 'index'])->name('works.index');
Route::get('/works/more', [App\Http\Controllers\WorkController::class, 'more'])->name('works.ajax');
Route::get('/works/{work}', [App\Http\Controllers\WorkController::class, 'show'])->name('works.show');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');


Route::get('/contact', function() {
    return view('contact.index');
})->name('contact.index');


Route::group(['prefix' => 'ba-admin'], function () {
    Voyager::routes();
});
