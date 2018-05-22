<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	 protected  $table='medicos';
    protected $fillable = ['foto', 'area', 'horainicio', 'horafim','user_id'];

       public function getUser(){
    	return $this->hasMany(User::class,'id');
    }
}
  