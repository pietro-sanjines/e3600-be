<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
use Illuminate\Support\Facades\Response;

class StageController extends Controller{
    public function index(){
        $stage = Stage::all();
        $response = Response::json($stage);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Stage::create($request->all());
    }

    public function show($id){
        return Stage::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $stage = Stage::findOrFail($id);
        $stage->update($request->all());

        return $stage;
    }

    public function destroy($id){
        
    }
}
