<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    
    public function index(){
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function show($id){
        $book = Book::findOrFail($id);
        return view('show', compact('book'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'genre' => 'required',
            'releasedate' => 'required',
            'price' => 'digits_between|max:4,6'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'release_date'=> $request->releasedate,
            'price' => $request->price
        ]);
        return redirect('/');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('update', compact('book'));
    }

    public function update(Request $request, $id){
        Book::findOrFail($id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'release_date'=> $request->releasedate,
            'price' => $request->price
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Book::destroy($id);
        return back();
    }

}
