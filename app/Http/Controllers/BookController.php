<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Response;

class BookController extends Controller{
    public function index(){
        $book = Book::all();
        $response = Response::json($book);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Book::create($request->all());
    }

    public function show($id){
        return Book::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return $book;
    }

    public function destroy($id){
        
    }
}
