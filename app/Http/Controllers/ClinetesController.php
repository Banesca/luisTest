<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clientes; // IMPORTO LA CLASE 


class ClinetesController extends Controller
{
    //

    // METODO AGREGAR //
    public function add(Request $request){
        

        if($request->nombre == ""){

            return response()->json(['error' => 'eres jorge'],404);
    
        }else{

            $clientes = new Clientes;
            $clientes->nombre = $request->nombre;
            $clientes->clave = $request->clave;
            $clientes->save();
    
            return response()->json(['ok' => 'Cliente registrado'],200);
    
        }

    }
    /*****************/

    // METODO GUARDAR //
    public function update(Request $request,$id){

        $clientes = clientes::find($id);
        $clientes->nombre = $request->nombre;
        $clientes->clave = $request->clave;
        $clientes->save();

        return response()->json(['ok' => 'Cliente actualizado'],200);

    }

    // METODO LISTAR //
    public function listar(Request $request){

        $clientes = clientes::get();
        return response()->json($clientes,200);

    }

    // METODO LISTAR CON PARAMETRO //
    public function listarID(Request $request,$id){

        $clientes = clientes::find($id);
        return response()->json($clientes,200);

    }
    

    // METODO DELETE //
    public function borrar(Request $request,$id){

        $clientes = clientes::find($id);
        $clientes->delete();

        return response()->json(['ok' => 'Cliente eliminado'],200);

    }

}
