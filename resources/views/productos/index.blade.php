@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayProductos as $producto )


            @if(isset($producto->id))
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <a href="{{ url('/productos/show/' . $producto->id ) }}">
                        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{$producto->nombre}}
                        </h4>
                    </a>

                </div>

            @else
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <a href="{{ url('/productos/' . $producto->categoria ) }}">

                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{$producto->categoria}}
                        </h4>
                    </a>
                </div>
            @endif
        @endforeach

    </div>
    <form name="formCategorias" action="/productos" method="get">
        <select name="categoria">
            @foreach($arrayProductos as $producto)
                <option value="{{$producto->categoria}}">{{$producto->categoria}}</option>
            @endforeach
        </select>


    </form>

@endsection