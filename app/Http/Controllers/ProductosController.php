<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Productos::where('status','=','1')->get();
        return response()->json(['Productos'=>$datos]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetProductsListOne()
    {
        $datos = Productos::where('categoria_id','=','1')->get();
        return response()->json(['Productos'=>$datos]);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetProductsListTwo()
    {
        $datos = Productos::where('categoria_id','=','2')->get();
        return response()->json(['Productos'=>$datos]);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetProductsListTree()
    {
        $datos = Productos::where('categoria_id','=','3')->get();
        return response()->json(['Productos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $extension = $request->file('archivo')->getClientOriginalExtension();
        $path = base_path().'/public/img/productos';
        $name = "archivo_".date('Y_m_d_h_i_s').".".$extension;
        $request->file("archivo")->move($path,$name);

        $datos = new  Productos();
        $datos->nombre = $input['nombre'];
        $datos->descripcion = $input['descripcion'];
        $datos->precio = $input['precio'];
        $datos->imagen = $name;
        $datos->categoria_id = $input['categoria'];
        $datos->save();
        return response()->json(['Mensaje'=>'Producto almacenado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Productos::find($id);
        return response()->json(['Productos'=>$datos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $datos = Productos::find($id);
        $datos->nombre = $input['nombre'];
        $datos->descripcion = $input['descripcion'];
        $datos->precio = $input['precio'];
        if(isset($input['archivo'])){
            $extension = $request->file('archivo')->getClientOriginalExtension();
            $path = base_path().'/public/img/productos';
            $name = "archivo_".date('Y_m_d_h_i_s').".".$extension;
            $request->file("archivo")->move($path,$name);
            $datos->imagen = $name;    
        }
        $datos->categoria_id = $input['categoria'];
        $datos->update();
        return response()->json(['Mensaje'=>'Producto actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Productos::find($id);
        $datos->status = 0;
        $datos->update();
        return response()->json(['Mensaje'=>'Producto eliminado correctamente']);
    }
}
