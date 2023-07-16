@extends('components.layout')

@section('title')
    Users
@endsection

@section('content')
    @foreach($users as $user)
        <p><a href="/user/{{$user->id}}"> {{ $user->name }} </a></p>
    @endforeach
@endsection
