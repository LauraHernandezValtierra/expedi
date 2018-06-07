<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Recibodig extends Model
{
    protected $table='recibodig';

    public function getIntercamAttribute($tc){
          $formato =  number_format($tc, 2);
        return $formato;
        }

    
    public function getDfechaAttribute($fsalida){
        $tiempo = new Carbon($fsalida);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y'));
        return $fecha;
	}
}
