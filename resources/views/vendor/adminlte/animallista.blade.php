@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<table class="table table-bordereds">
                        <thead> 
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody> 
                           @foreach($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->edad}}</td>
                                @foreach($dat as $item1)
                                @if($item->tipoanimalid == $item1->id)
                                <td>{{$item1->descripcion}}</td>
                                @endif
                                @endforeach
                                <td>
                                <a href="{{url('editar', $item->id)}}" type="button" class="btn btn-block btn-success">Editar</a></td>
                                <td>
                                <form method="post" action="{{route('eliminar',$item->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-danger">Eliminar</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection