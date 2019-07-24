@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
						<div class="panel-body">
						<div class="box box-warning">
	                        <div class="box-header with-border">
	                        </div>
	                        <div class="box-body">
	                            <form role="form" method="post" action="{{url('update',$datos->id)}}">
	                            	@method('PUT')
	                                @csrf
	                                <div class="form-group">
	                                    <label>Descripción</label>
	                                    <input value="{{$datos->descripcion}}" name="descripcion" type="text" class="form-control" placeholder="ingrese tipo">
	                                </div>
	                                <button type="submit" id="" class="btn btn-primary">Guardar</button>
	                            </form>
	                        </div>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection