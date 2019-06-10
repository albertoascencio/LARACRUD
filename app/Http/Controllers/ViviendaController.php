<?php

namespace App\Http\Controllers;

use App\Vivienda;
use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var['casas'] = Vivienda::all();
        return view('Inicio', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NewVivienda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vivienda::create($request->all());
        return redirect()->route('Index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function show(Vivienda $vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function get($id_vivienda)
    {
        $var = Vivienda::find($id_vivienda);
        return view('EditVivienda ', compact('var'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vivienda $vivienda, $id)
    {
        $vivienda->where('id_vivienda', $id)->update($request->all());
        return redirect()->route('Index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vivienda $vivienda, $id)
    {
        $vivienda->destroy($id);
        return redirect()->route('Index');
    }
}
