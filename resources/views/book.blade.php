@extends('components.layout')

@section('content')

    <article>
        <h1> {{ $book->title }} </h1>

    </article>

    Reviews
    <article>
        @foreach($book->reviews as $review)
            <p>
                {{ $review->title }}
            </p>
        @endforeach
    </article>
@endsection
