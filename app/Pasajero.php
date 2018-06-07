<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
   public $timestamps = false;
   public function getFechanacAttribute($fn){
        $tiempo = new Carbon($fn);
        $fecha =strtoupper($tiempo->formatLocalized('%d/%m/%y'));
        return $fecha;
        }

}
