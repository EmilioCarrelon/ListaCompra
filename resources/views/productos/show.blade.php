@extends('layouts.master')

@section('content')


    <div class="row">

        <div class="col-sm-4">

                        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>


        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                Nombre:{{$arrayProductos->nombre}}<br>
                Categoria{{$arrayProductos->categoria}}
            </h4>
            @if($arrayProductos->pendiente == 0)
            <a class="btn btn-danger" href="#" role="button">Pendiente de compra </a>
 @else
                <a class="btn btn-primary" href="#" role="button">Quitar de la compra </a>
@endif

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $arrayProductos->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar pel&iacute;cula</a>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
        </div>
    </div>

@stop