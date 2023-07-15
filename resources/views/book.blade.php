@extends('components.layout')

@section('content')

    <article>
        <h1> {{ $book->title }} </h1>

        <p>
            {{ $book->description }}
        </p>
    </article>

    <h1>Reviews</h1>

    <article>
        @foreach($book->reviews as $review)
            <h2>
                {{ $review->title }}
            </h2>

            <p>
                {{ $review->description }}
            </p>
        @endforeach
    </article>
@endsection
