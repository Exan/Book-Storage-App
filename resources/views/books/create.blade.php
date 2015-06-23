@extends('app')


@section('content')
    <h1>Add a new book to your collection</h1>
    
    <hr>
    
        @include('errors.list')
    
    {!! Form::open(['url' => 'books']) !!}
        @include('books.form', ['submitButtonText' => 'Add Book'])
    {!! Form::close() !!}
    


@stop

