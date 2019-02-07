@extends('layouts.master')

@section('content')


    <div class="row">

        <div class="col-sm-4">

                        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>


        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                Nombre:{{$arrayProductos[0]}}<br>
                Categoria{{$arrayProductos[1]}}
            </h4>
            <p>Actualmente esta comprado</p>
            <a class="btn btn-danger" href="#" role="button">Pendiente de compra </a>

        </div>
    </div>

@stop