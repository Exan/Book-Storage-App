@extends('app')

@section('content')

    <h1>Edit: {!! $book->title !!} </h1>
    
    @include('errors.list')
    
    {!! Form::model($book, ['method' => 'PATCH', 'action' => ['BooksController@update', $book->id]]) !!}
        @include('books.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
    
    @include('errors.list')
    
@stop