<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

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

Route::get('/catalogue', function () {
    return view('catalogue', [
        'books' => Book::latest()->get()
    ]);
});

Route::get('/book/{book:slug}', function (Book $book) {
    return view('book',[
       'book' =>  $book->load('reviews')
    ]);
});

Route::get('/', function () {
    return view('homepage');
});
