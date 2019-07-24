<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tipo;
use App\animal;
class animalcontroller extends Controller
{
 public function vista()
	{
		$consultar = animal::all();
		$datos1 = tipo::all();
		return view('adminlte::animalingreso', compact('datos1', $datos1))->with('datos',$consultar);
	}  

	public function guardar(Request $request){
		if($request->ajax()){
    	$consultar = tipo::all();
    	$animal = new animal();
	    $animal->nombre = $request->nombre;
	    $animal->edad = $request->edad;
	    $animal->tipoanimalid = $request->post("tipo");
	    $animal->save();
	    return response()->json(['mensaje'=> 'Datos Correctos']);
		}
	} 

	public function mostrar(){
		$consultar = animal::all();
		$dat = tipo::all();
	    return view('adminlte::animallista', compact('dat', $dat))->with('datos',$consultar);
	}

public function eliminar($id)
	{
		$consulta1 = animal::findOrFail($id);
		$consulta1->delete();
		$consulta = animal::all();
		$dat = tipo::all();
	    return view('adminlte::animallista', compact('dat', $dat))->with('datos',$consulta);
	}

	public function editar($id)
	{
		$consultar = animal::findOrFail($id);
		$dat = tipo::all();
		 return view('adminlte::animalmodificar', compact('dat', $dat))->with('datos',$consultar);

	}
	public function modificar(Request $request, $id)
	{
		$consultar = animal::findOrFail($id);
		$consultar->nombre = $request->nombre;
		$consultar->edad = $request->edad;
		$consultar->tipoanimalid = $request->post("tipo");
		$consultar->save();
		return redirect('animal/lista');
	}

}
