@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Modificar</div>

					<div class="panel-body">
						<div class="box box-warning">
                        <div class="box-header with-border">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post" action="{{url('actualizar',$datos->id)}}">
                                @method('PUT')
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input value="{{$datos->nombre}}" name="nombre" type="text" class="form-control" placeholder="ingrese curso">
                                </div>
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input value="{{$datos->edad}}" name="edad" type="text" class="form-control" placeholder="ingrese curso">
                                </div>
                                <div class="form-group">
                                    <label>Tipo de animal</label>
                                    <select class="combobox form-control" name="tipo">
                                        @foreach($dat as $item)
                                        @if($item->id == $datos->tipoanimalid)
                                        <option value="{{$datos->tipoanimalid}}" selected="selected">{{$item->descripcion}}</option>
                                        @endif
                                        @endforeach
                                        @foreach($dat as $item)
                                        @if($item->id != $datos->tipoanimalid)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                         @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" id="" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection