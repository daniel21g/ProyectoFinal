<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        //dd($servicios);
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return redirect()->route('productos')->with('crear', "Mostrando Formulario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $file_name = "sinimagen.png";
        if($request->file('fileimage')){
            $img = $request->file('fileimage');
            $file_name = $img->getClientOriginalName();
            Storage::disk('gallery')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }*/

        Productos::create([
            'image' => $request->file('fileimage')->getClientOriginalName(),
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'costo' => $request->input('costo')
        ]);
       // dd($request->all());
        //return 'creado';
        return redirect()->route('productos')->with('status', "Producto Creado");  
       // return 'guardado';
   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        //return 'modificando '. $producto->titulo ;
        $producto_mod = Productos::findOrFail($producto->id);
        //dd($producto_mod);
        return view('productos.edit',compact('producto_mod'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        $producto_nuevo = Productos::findOrFail($producto->id);
        $producto_nuevo->image= $request->file('fileimage')->getClientOriginalName();
        $producto_nuevo->titulo = $request->input('titulo');
        $producto_nuevo->descripcion= $request->input('descripcion');
        $producto_nuevo->costo = $request->input('costo');
        if($producto_nuevo->save()){
            return redirect()->route('productos')->with('guardar', "Producto: " . $producto_nuevo->titulo . " ha sido guardado");
        }else{
            return redirect()->route('productos')->with('error', "Hubo un error guardadndo el producto" .$producto_nuevo->titulo ); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        Productos::destroy($producto->id);
        
        return redirect()->route('productos')->with('eliminar', "Producto: " . $producto->titulo . " ha sido eliminado");
    }
}
