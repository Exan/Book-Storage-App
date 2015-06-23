@extends('app')

@section('content')


    <h1>My Books</h1>
    <hr>
    @foreach ($books as $book)
    
    
      
      <div class="well">
            <h2> Book Title: {{ $book->title }}</h2>
            <h3>Author: {{ $book->author }}</h3>
            <p>{{ $book->comments }}</p>
            <a  href="{{ url('/books', $book->id) }}" class="btn btn-primary" >View</a>
            <a  href="{{ url('/books', $book->id . '/edit') }}" class="btn btn-primary" >Edit</a>
      </div>
    
    @endforeach

    <?php echo $books->render(); ?>
    
@stop

