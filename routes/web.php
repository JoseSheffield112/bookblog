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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/catalogue', function () {
    $books = Book::all();
    return view('catalogue', [
        'books' => $books
    ]);
});

Route::get('/book/{book}', function ($slug) {
    $book = Book::findOrFail($slug);

    return ($book) ? view('book', [
        'book' => $book
    ]) : Redirect::to('/catalogue');
});
