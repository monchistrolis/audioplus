<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos['productos']=Producto::all();
        return view('productos.todos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.formularioProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProductos = request()->except('_token');
        if ($request->hasFile('foto')) {
            $datosProductos['foto'] = $request->file('foto')->store('uploads', 'public');
        };
        Producto::insert($datosProductos);
        return view('private.formularioProductos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id); 
        $imagenes = [];

        return view('general.ver', compact('producto','imagenes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

    // mostrar por categoria

    public function mostrarguitarras()
    {
        $guitarras = Producto::where('categoria', 'guitarras')->get();
        return view('productos.guitarra', ['guitarras' => $guitarras]);
    }

    public function mostrarbajos(){
        $bajos = Producto::where('categoria', 'bajos')->get();
        return view('productos.bajos', ['bajos' => $bajos]);
    }
}
