@extends('components.layout')

@section('title')
        {{ $reviews->first()->book->title }}
@endsection

@section('content')

    <article>
        <h1> Book tile : {{ $reviews->first()->book->title }} </h1>

        <h2>
            Description
        </h2>
        <p>
            {{ $reviews->first()->book->description }}
        </p>
    </article>

    <br>

    <h1>Reviews</h1>

    <article>
        @foreach($reviews as $review)
            <h2>
                {{ $review->title }}
            </h2>

            <a href="/reviewer/{{$review->reviewer->id}}">
                <p>
                    By {{ $review->reviewer->name }}
                </p>
            </a>

            Review:
            <p>
                {{ $review->description }}
            </p>
        @endforeach
    </article>
@endsection
