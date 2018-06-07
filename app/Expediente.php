<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table="expediente";

	public function getDfechasalidaAttribute($fsalida){
        $tiempo = new Carbon($fsalida);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y'));
        return $fecha;
	}
	public function getFhrecibidoAttribute($fingreso){
        $tiempo = new Carbon($fingreso);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y %I:%M:%S %p'));
        return $fecha;
	}

        public function getFecha_AperturaAttribute($fapertura){
        $tiempo = new Carbon($fapertura);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y'));
        return $fecha;
        }
        public function getTotpaqAttribute($totpaq){
        $formato =  number_format($totpaq, 2);
        return $formato;
    }
        public function getMinapagarAttribute($minapagar){
        $formato =  number_format($minapagar, 2);
        return $formato;
    }
}
