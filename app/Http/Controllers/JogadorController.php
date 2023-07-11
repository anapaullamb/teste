<?php

namespace App\Http\Controllers;

Use \App\Models\Jogador;
Use \App\Http\Requests\StoreJogadorRequest;
Use \App\Http\Requests\EditJogadorRequest;
use PHPUnite\Framework\TestCase;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Jogador::all();
        $jogadores = "jogadores";
        return view('jogadores.index', compact(['dados', 'jogadores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jogadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJogadorRequest $request)
    {
        Jogador::create([
            'nome' =>  $request->nome,
            'email' =>  $request->email,
            'pontuacao' => 0,
        ]);
        return redirect()->route('jogadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = Jogador::find($id);  
        return view('jogadores.show', compact('dados')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = Jogador::find($id);    
        if(!isset($dados)) { return "<h1>ID: $id não encontrado!</h1>"; }
        return view('jogadores.edit', compact('dados')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditJogadorRequest $request, $id)
    {
        $obj = Jogador::find($id);

        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        $obj->fill([
            'nome' =>  $request->nome,
            'email' =>  $request->email,
            'pontuacao' =>  $request->pontuacao
        ]);

        $obj->save();
        return redirect()->route('jogadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Jogador::find($id);
        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        find::destroy($id);
        return redirect()->route('jogadores.index');
    }
}
