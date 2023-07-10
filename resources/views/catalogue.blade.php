@extends('components.layout')

@section('title')
    Books catalogue
@endsection

@section('content')
    @foreach($books as $book)
        <article>
            <h1><a href="/book/{{ $book->slug }}"> {{ $book->title }} </a></h1>

            {{ $book->blurb }}
        </article>
    @endforeach
@endsection
