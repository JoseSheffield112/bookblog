@extends('components.layout')

@section('content')
    <h1>
        {{ $book->title }}
    </h1>

    <article>
        {!! $book->body !!}
    </article>
@endsection
