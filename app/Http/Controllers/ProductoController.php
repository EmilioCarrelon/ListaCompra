<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $arrayProductos = Producto::all();
        return view('productos.index', array('arrayProductos' => $arrayProductos));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getShow($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('arrayProductos' => $productos));
    }

    public function getEdit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.edit', array('id' => $productos));
    }

    public function postCreate(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->Nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos');
    }

    public function putEdit(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->Nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos/show/' . $producto->id);
    }

    //Cambiar el estado en la base de datos con el boton de comprar;
    public function changeBuy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pendiente = !$producto->pendiente;
        $producto->save();
        return back();
    }
}
