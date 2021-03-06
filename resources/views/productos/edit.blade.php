@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Alimento
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}

                    {{-- TODO: Protección contra CSRF --}}
                    <form action="{{ url('productos/edit/' . $id->id) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf

                    <div class="form-group">

                        @csrf
                        <label for="title">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{$id->nombre}}">
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="title">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" value="{{$id->precio}}">
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="title">Imagen</label>
                        <input type="text" name="img" id="img" class="form-control" value="{{$id->imagen}}">
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="title">Categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" value="{{$id->categoria}}">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" value="{{$id->descripcion}}"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar Alimento
                        </button>
                    </div>
                    </form>
                    {{-- TODO: Cerrar formulario --}}

                </div>
            </div>
        </div>
    </div>
@stop