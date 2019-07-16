<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    public function ventas(){ 

   		return $this->belongsTo('App\Ventas'); 

	} 
}
