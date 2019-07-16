<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libros;
use App\Ventas;
class InicioController extends Controller
{
    public function index() { 

 
   		$libros = Libros::all(); 
   		$ventas = Ventas::all(); 

   		foreach ($libros as $libro) { 

       		echo $libro->NombreLibro.'<br>'; 

       	}
	   	foreach ($ventas as $venta) { 

       		echo $venta->NombreCliente.'<br>'; 

       	}
	} 
}
