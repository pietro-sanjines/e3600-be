<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Illuminate\Support\Facades\Response;

class StatusController extends Controller{
    
    public function index(){
        $status = Status::all();
        $response = Response::json($status);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Status::create($request->all());
    }

    public function show($id){
        return Status::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $status = Status::findOrFail($id);
        $status->update($request->all());

        return $status;
    }

    public function destroy($id){
        
    }
}
