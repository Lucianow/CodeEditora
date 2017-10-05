<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\CategoryRequest;
use App\User;
use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::query()->orderBy('id')->paginate(5);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        $book = new Book();
        $book->title = $request->title;
        $book->subtitle = $request->subtitle;
        $book->price = $request->price;
        $book->author_id = $request->author;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        if(!($book = Book::query()->find($id))){
            throw new ModelNotFoundException('Livro não encontrado ...');
        }

        $logado = \Auth::user()->id;

        if ($logado == $book->author_id){
            $data = $request->all();
            $book->fill($data);
            $book->save();
            return redirect()->route('books.index');

        }else{
            return redirect()->route('books.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $logado = \Auth::user()->id;

        if ($logado == $book->author_id) {
            $book->delete();
            return redirect()->route('books.index');
        }else{
            return redirect()->route('books.index');
        }
    }
}
