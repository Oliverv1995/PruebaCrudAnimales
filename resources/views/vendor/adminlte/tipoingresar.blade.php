@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="box box-warning">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body">
                                <form role="form" id="ff" method="post" action="{{url('/tipoanimal')}}">
                                    @csrf
                                     <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>Tipo de animal</label>
                                        <input name="descripcion" type="text" class="form-control" placeholder="Ingrese tipo de animal">
                                    </div>
                                    

                                    <button type="submit" id="enviar" onclick='swal("Guardado correctamente", "", "success")' class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <div class="box box-warning">
                        <table class="table table-bordereds">
                        <thead>
                            <tr>
                                
                               <center><h2>Lista de tipo de animales</h2></center>
                                
                            </tr>
                        </thead>
                        <tbody id="datos">
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->descripcion}}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection