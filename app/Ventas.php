<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
	public function libros(){ 

   		return $this->hasMany('App\Libros'); 

	}   
}
