<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Book {

    public $title;
    public $blurb;
    public $date;
    public $body;

    public function __construct($title, $blurb, $date){
        $this->title = $title;
        $this->blurb = $blurb;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public static function all()
    {
        return collect(File::files(resource_path("/books")))
            -> map(fn($file) => YamlFrontMatter::parsefile($file))
            -> map(fn($document) => new Book(
                $document->title,
                $document->blurb,
                $document->date,
                $document->body()
            ));



    }

}
