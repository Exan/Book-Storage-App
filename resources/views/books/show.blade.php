@extends('app')

@section('content')

    <h1>{{ $book->title }}</h1>

    
    <b>Author:</b> {{ $book->author }}
    </br>
    <b>Comments:</b> {{ $book->comments }}
    <br>
    <b>Rating:</b> {{ $book->rating }}/5
    <br>

    

@stop