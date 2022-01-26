<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\booksController;

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
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('books', [booksController::class, 'index'])->name('admin.books');
    
    Route::get('books/add', function(){ return view('admin.books.add');})->name('admin.books.add');
    Route::post('books', [booksController::class, 'store'])->name('admin.books.store');

    Route::get('books/{id}/edit', [booksController::class, 'edit'])->name('admin.books.edit');
    Route::post('books/{id}/edit', [booksController::class, 'update'])->name('admin.books.update');

    Route::delete('books/{id}', [booksController::class, 'destroy'])->name('admin.books.delete');

});