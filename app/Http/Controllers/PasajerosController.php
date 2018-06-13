<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasajero;

class PasajerosController extends Controller
{
    public function agregar(Request $request){//agregar pasajero
    	$datos=$request->all();//paso todo lo que tiene $request a la variable $datos
    	if(isset($datos['paxprincipal'])){//si paxprincipal no viene vacía, $principal es igual a 1
    		$principal=1;
    	}else{
    		$principal=0;
    	}

    	 $error = null;
        DB::beginTransaction();//para saber si se realiza completa la transacción
        try {
        	Pasajero::insert([
        		'apellidop'=>strtoupper($datos['apellidop']),
        		'apellidom'=>strtoupper ($datos['apellidom']),
        		'nombre'=>strtoupper ($datos['nombre']),
        		'titulo'=>strtoupper ($datos['titulo']),
        		'principal'=>$principal,
        		'cid_expediente'=>$datos['exp'],
        		'aplic'=>'S'

        	]);
        	DB::commit();
            $success = true;
        }
        catch (\Exception $e) {
                $success = false;//si ocurre un error, se realiza un rollback
                $error = $e->getMessage();
                DB::rollback();
                 return redirect()->back()->with('mensaje_error', 'Ha ocurrido un error. Contacte al administrador'.$error);
    	}
        if ($success) {
        	return redirect()->back()->with('mensaje_success', 'El pasajero ha sido guardado');
            
        }
    }

    public function update(Request $request){//update pasajero
    	$datos=$request->all();
    	if(isset($datos['paxprincipal'])){
    		$principal=1;
    	}else{
    		$principal=0;
    	}

    	 $error = null;
        DB::beginTransaction();
        try {
        	Pasajero::where('idpax',$datos['idpax'])->update([
        		'genero'=>strtoupper ($datos['genero']),
        		'pasaporte'=>$datos['pasaporte'],
        		'fechanac'=>$datos['fechanac'],
        		'vencimientopas'=>$datos['vencimientopas'],
        		'nacionalidad'=>strtoupper ($datos['nacionalidad'])

        	]);
        	DB::commit();
            $success = true;
        }
        catch (\Exception $e) {
                $success = false;
                $error = $e->getMessage();
                DB::rollback();
               return redirect()->back()->with('mensaje_error', 'Ha ocurrido un error. Contacte al administrador'.$error);
    	}
        if ($success) {
        	return redirect()->back()->with('mensaje_success', 'Datos guardados correctamente');
            
        }
    }




}
