@extends('components.layout')

@section('title')
    Books catalogue
@endsection

@section('content')
    @foreach($books as $book)
        {{ $book->title }}
    @endforeach
@endsection
