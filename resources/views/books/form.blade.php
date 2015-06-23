        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('author', 'Author:') !!}
            {!! Form::text('author', null,['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('comments', 'Comments:') !!}
            {!! Form::textarea('comments', null,['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('rating', 'Rating:') !!}
            {!! Form::select('rating', array('1' => '1 - Terrible', '2' => '2 - Meh', '3' => '3 - Not Bad','4' => '4 - Good','5' => '5 - Amazing'), '3', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genre', 'Genre:') !!}
            {!! Form::select('genre', array('Autobiography' => 'Autobiography','Classic' => 'Classic', 'Crime' => 'Crime', 'Fantasy' => 'Fantasy','Horror' => 'Horror','Humor' => 'Humor','Mystery' => 'Mystery', 'Science Fiction' => 'Science Fiction', 'Suspense/Thriller' => 'Suspense/Thriller', 'Other' => 'Other'), '', ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('read_at', 'Date read:') !!}
            {!! Form::text('read_at' , date('m/j/Y') ,array('class' => 'form-control', 'id' => 'datepicker')) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>