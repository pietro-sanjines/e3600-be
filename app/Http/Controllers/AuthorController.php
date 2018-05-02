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
        if((!$request->name) || (!$request->last_name)){
            $response = Response::json([
                'message' => 'Por favor escriba todos los campos requeridos'
            ], 422);
            return $response;
        }

        $author = new Author(array(
            'name' => trim($request->name),
            'last_name' => trim($request->last_name)
        ));

        $author->save();
        $message = 'El Autor se añadio correctamente';
        $response = Response::json([
            'message' => $message,
            'data' => $author,
        ], 201);
        return $response;
    }

    public function show($id){
        $author = Author::find($id);
        if (!$author) {
            return Response::json([
                'error' => [
                    'message' => 'No se encontro el Autor.'
                ]
            ], 404);
        }
        return Response::json($author, 200);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        if((!$request->name) || (!$request->last_name)){
            $response = Response::json([
                'message' => 'Por favor escriba todos los campos requeridos'
            ], 422);
            return $response;
        }
        
        $author = Author::findOrFail($id);

        if (!$author) {
            return Response::json([
                'error' => [
                    'message' => 'No se encontro el Autor.'
                ]
            ], 404);
        }

        $author->name = trim($request->name);
        $author->last_name = trim($request->last_name);
        $author->save();
        $message = 'El autor ah sido actualizado de modo correcto';
        $response = Response::json([
            'message' => $message,
            'data' => $author
        ]);

        return $response;
    }

    public function destroy($id){
        $author = Author::findOrFail($id);
        if (!$author) {
            $response = Response::json([
                'message' => 'No se encontro el Autor.'
            ], 404);
            return $response;
        }
        $author->delete();
        $message = 'El autor ah sido eliminado de modo correcto';
        $response = Response::json([
            'message' => $message,
            'data' => $author
        ]);
        return $response;
    }
}
