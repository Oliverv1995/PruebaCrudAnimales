@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
 <center><h2>Ingrese datos</h2></center>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default" >
                       
                        <div class="box-body">
                            <form role="form" id="fff" method="post" action="{{url('/animal')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Animal</label>
                                    <input name="nombre" type="text" class="form-control" placeholder="Ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input name="edad" type="text" class="form-control" placeholder="Ingrese edad">
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="combobox form-control" name="tipo">
                                        <option value="" selected="selected">Seleccionar....</option>
                                        @foreach($datos1 as $item)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" id="enviar1" onclick='swal("Guardado correctamente", "", "success")' class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>     
                    <center><h2>Lista animales</h2></center>
                    
                        <table class="table table-bordereds">
                        <thead>
                            <tr>
                                <th scope="col">Animal</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Tipo animal</th>
                                
                            </tr>
                        </thead>
                        <tbody id="datos1">
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->edad}}</td>
                                    @foreach($datos1 as $item1)
                                        @if($item->tipoanimalid == $item1->id)
                                            <td>{{$item1->descripcion}}</td>
                                        @endif
                                    @endforeach
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
					</div>
				</div>
			</div>
@endsection