<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManuscriptReader;
use Illuminate\Support\Facades\Response;

class ManuscriptReaderController extends Controller{
    public function index(){
        $manuscriptReader = ManuscriptReader::all();
        $response = Response::json($manuscriptReader);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return ManuscriptReader::create($request->all());
    }

    public function show($id){
        return ManuscriptEditor::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $manuscriptReader = ManuscriptReader::findOrFail($id);
        $manuscriptReader->update($request->all());

        return $manuscriptReader;
    }

    public function destroy($id){
        
    }
}
