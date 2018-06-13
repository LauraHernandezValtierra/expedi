<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Expediente;
use App\Pasajero;
use App\Recibodig;
use App\Boleto;
use App\Tcliente;
use App\Tcambio;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExpedienteController extends Controller
{
    public function index()
	{
		$expediente=DB::table('expo_mov')
            ->join('expediente', 'expo_mov.cid_expedi', '=', 'expediente.cid_expediente')
            ->join('tdestpack', 'expo_mov.cid_destin', '=', 'tdestpack.cid_destpack')
            ->join('tclientes', 'expediente.cid_cliente', '=', 'tclientes.cid_cliente')
            ->select('expo_mov.cid_cotiza as cid_cotizacion', 'expediente.cid_expediente', 'expediente.dfecha as dfecha', 'expediente.chora','expo_mov.cid_destin', 'tdestpack.cdestpack as paquete', 'tclientes.capellidop as capellidop', 'tclientes.cid_cliente as cid_cliente','tclientes.cnombre as cnombre','tclientes.capellidom as capellidom', 
				'expediente.inicempleado', 'expediente.numempleado', 'expediente.pax as pax', 'expediente.dfechasalida','expediente.nomempleado')
				            ->get();
						return view('lista_expedientes',array('expediente' => $expediente));
	}

	public function show($exp, $act)
	{
		
		$expediente=DB::table('expo_mov')
            ->join('expediente', 'expo_mov.cid_expedi', '=', 'expediente.cid_expediente')
            ->join('tdestpack', 'expo_mov.cid_destin', '=', 'tdestpack.cid_destpack')
            ->join('tclientes', 'expediente.cid_cliente', '=', 'tclientes.cid_cliente')
            ->join('tfuncionario', 'tclientes.cid_cliente', '=', 'tfuncionario.cid_cliente')
             ->join('tareas', 'expo_mov.nid_area', '=', 'tareas.nid_area')
            ->select('expo_mov.cid_cotiza as cid_cotizacion', 'expediente.cid_expediente as cid_expediente', 'expediente.dfecha as dfecha', 'expediente.chora','expo_mov.cid_destin as cid_destin', 'tdestpack.cdestpack as paquete', 'tclientes.capellidop as capellidop', 'tclientes.cid_cliente as cid_cliente','tclientes.cnombre as cnombre','tclientes.capellidom as capellidom', 
			 	'expediente.inicempleado', 'expediente.numempleado', 'expediente.pax', 'expediente.dfechasalida as dfechasalida','expediente.nomempleado', 'expediente.totpaq as totpaq', 'expediente.minapagar as minapagar', 'expediente.moneda as moneda', 'expediente.minapagar as minapagar','expo_mov.observa as observa','expo_mov.nid_area as nid_area','tclientes.cestado as cestado', 'tclientes.cmunicipio as cmunicipio', 'tclientes.clada as clada', 'tclientes.ctelefono as ctelefono', 'tclientes.cext as cext', 'tfuncionario.cid_funcionario', 'tfuncionario.cnombre as fnombre', 'tfuncionario.capellidop as fapellidop', 'tclientes.ctipotelefono as ctipotelefono', 'tclientes.cmail as cmail', 'tclientes.ctipocliente as ctipocliente',  'tareas.carea as area')
            ->where('expediente.cid_expediente', $exp)
            ->first();
            $pasajeros=Pasajero::where('cid_expediente',$exp)->get();
            $today = Carbon::now();//fecha de hoy
            $hoy=strtoupper($today->formatLocalized('%Y-%m-%d'));
           
            $tchoy=Tcambio::where('fecha', $hoy)->first();
            switch ($act) {
            	case 1://resumen 
            		return view('resumen', compact('expediente', 'act'));
            		break;

            	case 2://pasajeros
            		
            		return view('pasajeros', compact('expediente', 'pasajeros', 'act'));
            		break;

            	case 3://cobranza
	            	$recibos=Recibodig::where('cid_expediente',$exp)
	            	->where('cancelado',0)
	            	->get();
	            	$totmxn=Recibodig::where('cid_expediente',$exp)->where('moneda','MXN')->where('cancelado',0)->sum('monto');
	            	$totmxn=number_format($totmxn,2);
	            	$totusd=Recibodig::where('cid_expediente',$exp)->where('moneda','USD')->where('cancelado',0)->sum('monto');
	            	$totusd=number_format($totusd,2);

                        $cliente=Tcliente:: where('cid_cliente',$expediente->cid_cliente)->first();
                        $apventatotal=0;//total aplic venta
                        foreach($recibos as $rec){
                              $tc=$rec->intercam;//tipo de cambio
                              $m=$rec->monto;//monto
                              if($rec->moneda=='MXN'){
                                    $apventa=$m/$tc;//aplic venta
                              }else{
                                    $apventa=$m;//aplic venta
                              }
                              $apventatotal=$apventatotal+$apventa;
                              $apventatotal=number_format($apventatotal,2);

                        }

                        $impapagar=$expediente->minapagar-$apventatotal;//importe a pagar


	            		return view('cobranza', compact('expediente', 'recibos','act', 'totmxn', 'totusd', 'cliente', 'pasajeros', 'apventatotal', 'tchoy','impapagar'));
            		break;

            	case 4://boletos
            		$boletos=Boleto::where('cid_expedi',$exp)->get();
            		return view('boletosa', compact('expediente', 'boletos', 'act'));
            		break;

                  case 5://pagos
                        $boletos=Boleto::where('cid_expedi',$exp)->get();
                        return view('pagos', compact('expediente', 'boletos', 'act'));
                        break;
                        
                  case 6://pdf
                        $boletos=Boleto::where('cid_expedi',$exp)->get();
                        return view('pdf', compact('expediente', 'boletos', 'act'));
                        break; 

                  case 7://confirmaciones
                        $boletos=Boleto::where('cid_expedi',$exp)->get();
                        return view('confirmaciones', compact('expediente', 'boletos', 'act'));
                        break;               
            	
            	default:
            		# code...
            		break;
            }
            
    }



}
