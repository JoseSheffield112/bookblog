@extends('components.layout')

@section('title')
    Reviews
@endsection

@section('content')
    @foreach($reviews as $review)
        <article>
            <h1>
                {{ $review->title }}
            </h1>

            <p>
                {{ $review->description }}
            </p>
        </article>
    @endforeach
@endsection
