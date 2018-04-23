<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editor;
use Illuminate\Support\Facades\Response;

class EditorController extends Controller{
    public function index(){
        $editor = Editor::all();
        $response = Response::json($editor);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Editor::create($request->all());
    }

    public function show($id){
        return Editor::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $editor = Editor::findOrFail($id);
        $editor->update($request->all());

        return $editor;
    }

    public function destroy($id){
        
    }
}
