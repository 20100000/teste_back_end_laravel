<?php

namespace App\Http\Controllers;
use App\Dividas;
use Illuminate\Http\Request;

class DividaController extends Controller
{
    public  function getDividas($id){
        $dividas = Dividas::select('*')->where('devedor_id',$id)->get();


        return response()->json([
            'success'=>true,
            'data'=> $dividas
        ], 200);
    }
    public  function addDivida($id, Request $request){

    }
}
