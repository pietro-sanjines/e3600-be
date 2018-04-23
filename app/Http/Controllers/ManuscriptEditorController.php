<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManuscriptEditor;
use Illuminate\Support\Facades\Response;

class ManuscriptEditorController extends Controller{
    public function index(){
        $manuscriptEditor = ManuscriptEditor::all();
        $response = Response::json($manuscriptEditor);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return ManuscriptEditor::create($request->all());
    }

    public function show($id){
        return ManuscriptEditor::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $manuscriptEditor = ManuscriptEditor::findOrFail($id);
        $manuscriptEditor->update($request->all());

        return $manuscriptEditor;
    }

    public function destroy($id){
        
    }
}
