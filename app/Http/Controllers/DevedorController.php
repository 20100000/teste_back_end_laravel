<?php

namespace App\Http\Controllers;
use App\Devedores;
use Illuminate\Http\Request;

class DevedorController extends Controller
{
    public function todosDevedores(){
        $devedores =  Devedores::all();
        return response()->json([
            'success'=>true,
            'data'=> $devedores
        ], 200);

    }

    public function addDevedor(Request $request){
        $dev = Devedores::create($request->all());

        $success = false;
        if($dev){
            $success = true;
        }

        return response()->json([
            'success'=>$success,
            'data'=> $dev,
        ], 200);

    }

    public function buscarDevedor($nome){
//        $devedores = Devedores::whereHas('nome');
    }

    public function getDevedor($id){

        $devedor = Devedores::find($id);
        return response()->json([
            'success'=>true,
            'data'=> $devedor
        ], 200);
    }

    public function updateDevedor($id, Request $request){
        $devedor = Devedores::findOrFail($id);

        $input = $request->all();

        $devedor->fill($input)->save();

        return response()->json([
            'success'=>true,
        ], 200);
    }

    public function removeDevedor($id){
        $devedor = Devedores::findOrFail($id);
        $devedor->delete();
        return response()->json([
            'success'=>true,
        ], 200);
    }
}
