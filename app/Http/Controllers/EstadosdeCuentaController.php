<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recibodig;
use App\Tcliente;
use App\Expediente;
use App\Solicitud;
use App\Tfuncionario;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

setlocale(LC_TIME, 'es');
class EstadosdeCuentaController extends Controller
{
   public function estadoCuenta($exp, $tipo){
   		$recibo=Recibodig::where('cid_expediente',$exp)
	            	->where('cancelado',0)
	            	->first();
	            	
	    $recibos=Recibodig::where('cid_expediente',$exp)
	            	->where('cancelado',0)
	            	->get();

        $expediente=Expediente::where('cid_expediente',$exp)->first();

        $funcionario=Tfuncionario::where('cid_cliente', $expediente->cid_cliente)->first();

        $cliente=Tcliente:: where('cid_cliente',$expediente->cid_cliente)->first();

        $today = Carbon::now();//fecha de hoy
        $hoy=strtoupper($today->formatLocalized('%d de %B del %Y %I:%M:%S'));//formato de la fecha de hoy

        $porcommega=0.0218; //porcentaje de comisión mega
        $porcomb=0.0218; //porcentaje de comisión bancos
        $montomxn=0;//monto en mxn
        $montousd=0;//monto en usd
        $cm=0;//comisión mega total
        $cmusd=0;//comisión mega total en usd
        $cb=0;//comisión bancaria total
        $cbusd=0;//comisión bancaria total en usd

        foreach ($recibos as $rec) {
        	$tc=$rec->intercam;//tipo de cambio
        	$m=$rec->monto;//monto
        	if($rec->moneda=='MXN'){
        		$mxn=$m;//monto en mxn
        		$usd=$m/$tc;//monto en usd

        	}else{
        		$mxn=$m*$tc;//monto en mxn
        		$usd=$m;//monto en usd
        	}
        	$montomxn=$montomxn+$mxn;//monto total en mxn
        	$montousd=$montousd+$usd;//monto total en usd

            $comm=number_format($m*$porcommega,2);//comisión mega
            $commusd=number_format($comm/$tc,2);//comisión mega usd

            $comb=number_format($m*$porcomb,2); //comisión bancaria
            $combusd=number_format($comb/$tc,2);//comisisón bancaria en usd

            $cm=$cm+$comm;
            $cmusd=$cmusd+$commusd;
            $cb=$cb+$comb;
            $cbusd=$cbusd+$combusd;
        }
        if($expediente->moneda=='MXN'){
        	$diferencia=((float)$expediente->iva)-$montomxn;//diferencia a pagar mxn 
            //no se tomó el valor del total del paquete ya que para la prueba no se está usando la base de datos oficial y en la de prueba el monto aparece como string
        }else{

        	
        	$diferencia=((float)$expediente->iva)-$montousd;//diferencia a pagar usd
            //no se tomó el valor del total del paquete ya que para la prueba no se está usando la base de datos oficial
        }

        if($tipo==2){//si es tipo 2, es un estado de cuenta para un cliente
        	$pdf = PDF::loadView('pdf.estadocuentaCliente', compact('exp', 'recibo', 'cliente', 'expediente', 'recibos', 'montomxn', 'montousd', 'diferencia', 'hoy'));
            $t="Cliente";//para dar nombre al archivo
        }
        else{//es un estado de cuenta para mega
        	$pdf = PDF::loadView('pdf.estadocuentaMega', compact('exp', 'recibo', 'cliente', 'expediente', 'recibos', 'montomxn', 'montousd', 'diferencia', 'hoy', 'cm', 'cmusd', 'cb', 'cbusd', 'porcomb', 'porcommega', 'funcionario'));
            $t="Mega";//para dar nombre al archivo
        }

        return $pdf->stream('EstadodeCuenta_'.$t.'_EXP_'.$exp.'.pdf');
   	//ejemplo de nombre: EstadodeCuenta_Cliente_EXP_OUT102300.pdf
                    //   EstadodeCuenta_Mega_EXP_OUT102300.pdf
   }

}
