<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ComidaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comidas = \App\Comida::all();
        $argumentos = array();

        $exito = $request->input('exito');

        $argumentos["comidas"] = $comidas;
        $argumentos["exito"] = $exito;
        return view("comidas.index", $argumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $argumentos = array();
        return view('comidas.create', $argumentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->input('txtNombre');
        $precio = $request->input('txtPrecio');

        $nuevaComida = new \App\Comida;
        $nuevaComida->nombre = $nombre;
        $nuevaComida->precio = $precio;

        $respuesta = array();
        $respuesta["exito"] = ($nuevaComida->save());

        return redirect()->route('comidas.index', $respuesta);
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
        $comida = \App\Comida::find($id);
        $argumentos = array();
        $argumentos['comida'] = $comida;

        return view('comidas.edit', $argumentos);
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
        $comida = \App\Comida::find($id);
        $comida->nombre = $request->input('txtNombre');
        $comida->precio = $request->input('txtPrecio');

        $respuesta = array();
        $respuesta["exito"] = false;

        if($comida->save()) {
            $respuesta["exito"] = true;
        }

        return redirect()->route('comidas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $comida = \App\Comida::find($id);
        $argumentos = array();
        $argumentos['comida'] = $comida;

        return view('comidas.delete', $argumentos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comida = \App\Comida::find($id);
        $comida->delete();
        return redirect()->route('comidas.index');
    }
}
