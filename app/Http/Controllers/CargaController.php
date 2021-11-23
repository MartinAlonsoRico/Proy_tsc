<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carga;
use PhpParser\Node\Expr\New_;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cargas=Carga::all();
        return view('carga.index')->with ('cargas', $Cargas); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('Nom_archi')){
        $cargas = new Carga();
        $cargas->Usuario= $request->get('Usuario');
        $cargas->Nom_archi=$request->get('Nom_archi')->store('public');
        $cargas->Fecha_cargue=$request->get('Fecha_cargue');
        $cargas->Observaciones=$request->get('Observaciones');
    }
        $cargas->save();
        return redirect('/cargas');
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
        $carga=Carga::find($id); 
        return view ('carga.edit')->with('carga',$carga);
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
        $carga = Carga::find($id);
        $carga->Usuario= $request->get('Usuario');
        $carga->Nom_archi=$request->get('Nom_archi');
        $carga->Fecha_cargue=$request->get('Fecha_cargue');
        $carga->Observaciones=$request->get('Observaciones');
        
        $carga->save();
        return redirect('/cargas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carga = Carga::find($id);
        $carga->delete();
        return redirect('/cargas');
    }
}
