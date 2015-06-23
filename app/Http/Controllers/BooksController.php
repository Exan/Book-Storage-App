<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Auth;
use Khill\Lavacharts\Lavacharts;



class BooksController extends Controller {

    

        public function __construct()
        {
            $this->middleware('auth');
        }
        
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            
                $id = Auth::user()->id;
                    
                $books = Book::latest()->where('user_id', '=', $id)->paginate(5);
            
		return view('books.index', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            
		return view('books.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BookRequest $request)
	{
                
                Auth::user()->books()->create($request->all());
                
                \Session::flash('flash_message', 'A new book has been succesfully stored.');
                
                return redirect('books');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Book $book)
	{

                
                return view('books.show', compact('book'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Book $book)
	{
               
            
		return view('books.edit', compact('book'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Book $book, BookRequest $request)
	{
                
                $book->update($request->all());
                
                \Session::flash('flash_message', 'The book has been successfully updated.');
                
                return redirect('books');
                
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
        
	public function data()
	{
            
            $id = Auth::user()->id;

            $biography = Book::where('user_id', '=', $id)->where('genre', '=', 'Autobiography')->count();
            $classic = Book::where('user_id', '=', $id)->where('genre', '=', 'Classic')->count();
            $crime = Book::where('user_id', '=', $id)->where('genre', '=', 'Crime')->count();
            $fantasy = Book::where('user_id', '=', $id)->where('genre', '=', 'Fantasy')->count();
            $horror = Book::where('user_id', '=', $id)->where('genre', '=', 'Horror')->count();
            $humor = Book::where('user_id', '=', $id)->where('genre', '=', 'Humor')->count();
            $mystery = Book::where('user_id', '=', $id)->where('genre', '=', 'Mystery')->count();
            $scfi = Book::where('user_id', '=', $id)->where('genre', '=', 'Science Fiction')->count();
            $thriller = Book::where('user_id', '=', $id)->where('genre', '=', 'Suspense/Thriller')->count();
            $other = Book::where('user_id', '=', $id)->where('genre', '=', 'Other')->count();
            
            $genre = \Lava::DataTable();

            $genre->addStringColumn('Genre')
                    ->addNumberColumn('Percent')
                    ->addRow(array('Autobiography', $biography))
                    ->addRow(array('Classic', $classic))
                    ->addRow(array('Crime', $crime))
                    ->addRow(array('Fantasy', $fantasy))
                    ->addRow(array('Horror', $horror))
                    ->addRow(array('Humor', $humor))
                    ->addRow(array('Mystery', $mystery))
                    ->addRow(array('Science Fiction', $scfi))
                    ->addRow(array('Thriller/Suspense', $thriller))
                    ->addRow(array('Other', $other));

            $donutchart = \Lava::DonutChart('Books')
                               ->setOptions(array(
                                 'datatable' => $genre,
                                 'title' => 'Books read by genre'
                               ));
            
		return view('books.data', compact($donutchart));
	}


}
