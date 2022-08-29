<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json([
            'clientes' => $clientes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = Cliente::create($request->all());

        return response()->json([
            'message' => "clientes saved successfully!",
            'clientes' => $clientes
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $clientes)
    {
        $clientes->update($request->all());

        return response()->json([
            'message' => "clientes updated successfully!",
            'clientes' => $clientes
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $clientes)
    {
        $clientes->delete();

        return response()->json([
            'message' => "clientes deleted successfully!",
        ], 200);
    }
}
