@php use App\Models\Book; @endphp
@extends('components.layout')

@section('title')
        {{ $reviewer->name }}
@endsection

@section('content')
    <h1> This is a list of all reviews that {{$reviewer->name}} has posted</h1>

    @foreach($userReviews as $bookTitle=>$reviews)

        Book : {{ $bookTitle }}

        <br>

        Reviews:
        <br>
        @foreach($reviews as $review)
            <b> {{ $review->title }} </b> :

            {{ $review->description }}
            <br>
        @endforeach
    @endforeach
@endsection


{{-- USED when grouping by book id--}}
{{--        @php--}}
{{--            $book = Book::find($bookId);--}}
{{--        @endphp--}}
