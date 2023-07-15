<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // preventing mass-assignment exploitation:
    protected $fillable = ['slug', 'title', 'blurb', 'description'];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
