<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticulosController extends Controller
{
    public function index(){
       $articulos = Articulo::get();
       return view('articulos.index')->with('articulos', $articulos);
    }

    public function create(){
        return view('articulos.create');
    }

    public function store(Request $request){
        $articulo = new Articulo;

        $rules = [
            'codigo' => 'required|unique:articulos',
            'descripcion' => 'required|unique:articulos',
            'stock' => 'required',
            'stock_minimo' => 'required',
            'precio' => 'required'
        ];


        $messages = [
            'codigo.required' => 'Agregue el codigo del articulo.',
            'codigo.unique' =>'El codigo ingresado ya existe en el inventario.',
            'descripcion.required' => 'Agregue la descripcion del articulo.',
            'descripcion.unique' => 'La descripcion del articulo ingresado ya existe en el inventario',
            'stock.required' => 'Agregue el stock del articulo',
            'stock_minimo.required' => 'Agregue el stock minimo del articulo',
            'precio.required' => 'Agregue el precio del articulo'
        ];
        $this->validate($request, $rules,$messages);

        $articulo->codigo = $request->input('codigo');
        $articulo->descripcion  = $request->input('descripcion');
        $articulo->stock  = $request->input('stock');
        $articulo->stock_minimo  = $request->input('stock_minimo');
        $articulo->costo  = $request->input('costo');
        $articulo->precio  = $request->input('precio');
        $articulo->unidad_medida  = $request->input('unidad_medida');

        $articulo->save();
        return redirect()->route('articulos.index');
    }

    public function edit($id){
        $articulo = Articulo::find($id);
        return view('articulos.edit')->with('articulo',$articulo);
    }

    public function update(Request $request, $id){
        $articulo = Articulo::find($id);
        $articulo->codigo = $request->input('codigo');
        $articulo->descripcion  = $request->input('descripcion');
        $articulo->stock  = $request->input('stock');
        $articulo->stock_minimo  = $request->input('stock_minimo');
        $articulo->costo  = $request->input('costo');
        $articulo->precio  = $request->input('precio');
        $articulo->unidad_medida  = $request->input('unidad_medida');

        $articulo->save();
        return redirect()->route('articulos.index');
    }

    public function destroy($id){
        Articulo::destroy($id);
        return redirect()->route('articulos.index');
    }
}
