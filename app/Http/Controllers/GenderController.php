<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use Illuminate\Support\Facades\Response;

class GenderController extends Controller{
    
    public function index(){
        $gender = Gender::all();
        $response = Response::json($gender);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Gender::create($request->all());
    }

    public function show($id){
        return Gender::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $gender = Gender::findOrFail($id);
        $gender->update($request->all());

        return $gender;
    }

    public function destroy($id){
        
    }
}
