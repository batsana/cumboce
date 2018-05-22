<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model

{    
	protected  $table='consultas';
    protected $fillable = [ 'hora', 'data', 'medico_id', 'user_id','estado','estados'];


 
}
