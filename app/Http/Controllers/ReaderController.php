<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reader;
use Illuminate\Support\Facades\Response;

class ReaderController extends Controller{
    public function index(){
        $reader = Reader::all();
        $response = Response::json($reader);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Reader::create($request->all());
    }

    public function show($id){
        return Reader::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $reader = Reader::findOrFail($id);
        $reader->update($request->all());

        return $reader;
    }

    public function destroy($id){
        $reader = Reader::findOrFail($id);
        if (!$reader) {
            $response = Response::json([
                'message' => 'No se encontro el Lector.'
            ], 404);
            return $response;
        }
        $reader->delete();
        $message = 'El lector ah sido eliminado de modo correcto';
        $response = Response::json([
            'message' => $message,
            'data' => $reader
        ]);
        return $response;
    }
}
