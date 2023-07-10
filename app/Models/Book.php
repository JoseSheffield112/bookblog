<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Book {

    public $title;
    public $blurb;
    public $slug;
    public $date;
    public $body;


    public function __construct($title, $blurb, $slug, $date, $body){
        $this->title = $title;
        $this->blurb = $blurb;
        $this->slug = $slug;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        return collect(File::files(resource_path("/books")))
            -> map(fn($file) => YamlFrontMatter::parsefile($file))
            -> map(fn($document) => new Book(
                $document->title,
                $document->blurb,
                $document->slug,
                $document->date,
                $document->body()
            ));
    }

    public static function find($slug){
        return (static::all() -> firstWhere('slug', $slug));
    }

    public static function findOrFail($slug){
        $book = static::find($slug);

        return ($book ? $book : null);
    }
}
