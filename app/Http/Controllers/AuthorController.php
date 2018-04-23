<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Support\Facades\Response;

class AuthorController extends Controller{
    public function index(){
        $author = Author::all();
        $response = Response::json($author);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Author::create($request->all());
    }

    public function show($id){
        return Author::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return $author;
    }

    public function destroy($id){
        
    }
}
