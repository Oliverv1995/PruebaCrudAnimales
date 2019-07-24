<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
class tipoanimalcontroller extends Controller
{
	public function vista()
	{
		 $consultar = tipo::all();
		return view('adminlte::tipoingresar')->with('datos',$consultar);

	}

	
	public function guardar(Request $request){
		if($request->ajax()){
    	$tipo = new tipo();
	    $tipo->descripcion = $request->descripcion;
	    $tipo->save();
	    return response()->json(['mensaje'=> 'Datos Correctos']);
		}
	    
	}

	public function mostrar(){
	    $consultar = tipo::all();
	    return view('adminlte::tipolista')->with('datos',$consultar);
	}

	public function eliminar($id)
	{
		$consultar = tipo::findOrFail($id);
		$consultar->delete();
		$consultar = tipo::all();
	    return view('adminlte::tipolista')->with('datos',$consultar);
	}

	public function editar($id)
	{
		$consultar = tipo::findOrFail($id);
		 return view('adminlte::tipomodificar')->with('datos',$consultar);
	}

	public function modificar(Request $request, $id)
	{
		$consultar = tipo::findOrFail($id);
		$consultar->descripcion = $request->descripcion;
		$consultar->save();
		return redirect('tipoanimal/lista');
	}
}