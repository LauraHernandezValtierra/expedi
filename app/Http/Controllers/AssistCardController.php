<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajero;
use App\Expediente;
use App\Templeado;

class AssistCardController extends Controller
{
     public function solicitud($expediente)
	{
		$exp=Expediente::where('cid_expediente',$expediente)->first();
		$pasajeros=Pasajero::where('cid_expediente',$expediente)->get();
		$empleado=Templeado::where('ciniciales', $exp->inicempleado)->first();
		$date2 = date_create("now");
		return view('assistcard',compact('exp','pasajeros','empleado', 'date2'));
	}
}
