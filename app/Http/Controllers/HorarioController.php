<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \App\Models\Horario;
Use \App\Http\Requests\StoreHorarioRequest;
Use \App\Http\Requests\EditHorarioRequest;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Horario::all();
        $horarios = "Horarios";
        return view('horarios.index', compact(['dados', 'horarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Horario::create([
            'hora' =>  $request->hora,
            'vagas' =>  $request->vagas
        ]);
        return redirect()->route('horario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = Horario::find($id);  
        return view('horarios.show', compact('dados')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = Horario::find($id);    
        if(!isset($dados)) { return "<h1>ID: $id não encontrado!</h1>"; }
        return view('horarios.edit', compact('dados')); 
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
        $obj = Horario::find($id);

        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        $obj->fill([
            'hora' =>  $request->hora,
            'vagas' =>  $request->vagas,
        ]);

        $obj->save();
        return redirect()->route('horarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Horario::find($id);
        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        Horario::destroy($id);
        return redirect()->route('horarios.index');
    }
}
