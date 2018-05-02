<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookstore;
use Illuminate\Support\Facades\Response;

class BookstoreController extends Controller{
    public function index(){
        $bookstore = Bookstore::all();
        $response = Response::json($bookstore);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Bookstore::create($request->all());
    }

    public function show($id){
        return Bookstore::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $bookstore = Bookstore::findOrFail($id);
        $bookstore->update($request->all());

        return $bookstore;
    }

    public function destroy($id){
        $bookstore = Bookstore::findOrFail($id);
        if (!$bookstore) {
            $response = Response::json([
                'message' => 'No se encontro la libreria.'
            ], 404);
            return $response;
        }
        $bookstore->delete();
        $message = 'La libreria se ah sido eliminado de modo correcto';
        $response = Response::json([
            'message' => $message,
            'data' => $bookstore
        ]);
        return $response;
    }
}
