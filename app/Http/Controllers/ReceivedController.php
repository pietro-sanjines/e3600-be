<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Received;
use Illuminate\Support\Facades\Response;

class ReceivedController extends Controller{
    public function index(){
        $received = Received::all();
        $response = Response::json($received);
        return $response;
    }

    public function create(){
        
    }

    public function store(Request $request){
        return Received::create($request->all());
    }

    public function show($id){
        return Received::find($id);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        $received = Received::findOrFail($id);
        $received->update($request->all());

        return $received;
    }

    public function destroy($id){
        
    }
}
