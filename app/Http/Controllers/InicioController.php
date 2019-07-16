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

       		echo $libro->NombreLibro.' '.$libro->Precio.'<br>'; 
       		echo 'Compras<br>';
       		$total=0;
       		foreach ($ventas as $venta) { 

       			if ($libro->id==$venta->Libro_id) {
       				echo $venta->NombreCliente.' '.$venta->Cantidad.'<br>'; 
       				$total+=$libro->Precio*$venta->Cantidad;

       			}; 

       		}
       		echo 'Total: '.$total.'<br>';
       		echo '<br>';

       	}

	} 
}
