@php use App\Models\Book; @endphp
@extends('components.layout')

@section('title')
        {{ $reviewer->name }}
@endsection

@section('content')
    <h1> This is a list of all reviews that {{$reviewer->name}} has posted</h1>

    @foreach($userReviews as $bookTitle=>$reviews)

        {{ $bookTitle }}

        <br>

        @foreach($reviews as $review)
            {{ $review->title }}
        @endforeach
    @endforeach
@endsection


{{-- USED when grouping by book id--}}
{{--        @php--}}
{{--            $book = Book::find($bookId);--}}
{{--        @endphp--}}
