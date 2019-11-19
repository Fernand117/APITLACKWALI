<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Ordenes;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Ordenes::all();
        return respone()->json(['Ordenes'=>$datos]);
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
        $datos = new Ordenes();
        $datos->cliente_id = $input['clientes_id'];
        $datos->producto_id = $input['producto_id'];
        $datos->cantidad = $input['cantidad'];
        $datos->precio_total = $input['precio_total'];
        $datos->estado_orden = $input['estado_orden'];
        $datos->fecha_orden = $input['fecha_orden'];
        $datos->save();
        return response()->json(['Mensaje'=>'Orden generada correctamente']);
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
        $datos = Ordenes::find($id);
        return response()->json(['Ordenes'=>$datos]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Ordenes::find($id);
        $datos->delete();
        return response()->json(['Mensaje'=>'La orden se ha eliminado correctamente']);
    }
}
