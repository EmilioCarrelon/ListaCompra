<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $arrayProductos = Producto::all();
        return view('productos.index', array('arrayProductos'=>$arrayProductos));
    }
    public function getCreate()
    {
        return view('productos.create');
    }
    public function getShow($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('arrayProductos'=>$productos));
    }
    public function getEdit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.edit', array('id'=>$productos));
    }

}
