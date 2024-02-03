<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        $books = Book::paginate(1);
        return view('listeBooks',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'genre' => 'required|max:255',
            'description' => 'required|max:255',
            'publication_year' => 'required',
            'total_copies' => 'required|integer',
            'available_copies' => 'required|integer',
        ]);
    
        $book = new Book();
        $book->fill($request->all());
        $book->save();
    
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        
        return view('edite', compact('book'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'genre' => 'required|max:255',
            'description' => 'required|max:255',
            'publication_year' => 'required',
            'total_copies' => 'required|integer',
            'available_copies' => 'required|integer',
        ]);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Livre mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

    return redirect()->route('books.index')->with('success', 'Livre supprimé avec succès.');
    }
}
