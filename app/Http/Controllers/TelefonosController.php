<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Telefonos;

class TelefonosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Telefonos::all();
        return response()->json(['Telefonos'=>$datos]);
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
        $datos = new Telefonos();
        $datos->telefono = $input['telefono'];
        $datos->celular = $input['celular'];
        $datos->clientes_id = $input['clientes_id'];
        $datos->save();
        return response()->json(['Mensaje' => 'Los telefonos han sido almacenados correctamente']);
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
        $datos = Telefonos::find($id);
        return response()->json(['Telefonos'=>$datos]);
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
        $datos = Telefonos::find($id);
        $datos->telefono = $input['telefono'];
        $datos->celular = $input['celular'];
        $datos->clientes_id = $input['clientes_id'];
        $datos->update();
        return response()->json(['Mensaje' => 'Los telefonos se han actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Telefonos::find($id);
        $datos->delete();
        return response()->json(['Mensaje'=>'Los telefonos se han eliminado correctamente']);
    }
}
