<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Review::factory(4)->create();
        User::factory(2)->create();

        //
        $book = Book::factory()->create();
        Review::factory(5)->create([
            'book_id' => $book->id
        ]);

        //
        $user = User::factory()->create([
            'name' => 'Jose'
        ]);
        Review::factory()->create([
            'user_id' => $user->id,
            'book_id' => $book->id
        ]);
    }
}
