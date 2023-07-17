<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\User;
use App\Models\Review;

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
       'reviews' =>  $book->reviews()->with(['book', 'reviewer'])->get()
    ]);
    /* VS using the below (think above is cleaner?)
     *   return view('book',[
     *   'book' =>  $book->load('reviews', 'reviews.reviewer')
     *   ]);
     *
     */
});

Route::get('reviewer/{reviewer:id}', function (User $reviewer) {
    // groupBy('book_id')
    return view('reviews', [
        'userReviews' => $reviewer->reviews()->with('book')->get()->groupBy('book.title'),
        'reviewer' => $reviewer
    ]);
});

Route::get('/', function () {
    return view('homepage');
});
