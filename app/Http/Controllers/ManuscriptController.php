<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manuscript;
use Illuminate\Support\Facades\Response;

class ManuscriptController extends Controller{
    public function index(){
        $manuscript = Manuscript::all();
        $response = Response::json($manuscript);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Manuscript::create($request->all());
    }

    public function show($id){
        return Manuscript::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $manuscript = Manuscript::findOrFail($id);
        $manuscript->update($request->all());

        return $manuscript;
    }

    public function destroy($id){
        
    }
}
