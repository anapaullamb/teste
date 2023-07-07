<?php

namespace App\Http\Controllers;
Use \App\Models\Cliente;
Use \App\Http\Requests\StoreClienteRequest;
Use \App\Http\Requests\EditClienteRequest;
use PHPUnite\Framework\TestCase;
use Illuminate\Http\Request;

class ClienteTest extends TestCase{

}
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Cliente::all();
        $clientes = "clientes";
        return view('clientes.index', compact(['dados', 'clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        Cliente::create([
            'nome' =>  $request->nome,
            'email' =>  $request->email
        ]);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = Cliente::find($id);  
        return view('clientes.show', compact('dados')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = Cliente::find($id);    
        if(!isset($dados)) { return "<h1>ID: $id não encontrado!</h1>"; }
        return view('clientes.edit', compact('dados')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditClienteRequest $request, $id)
    {
        $obj = Cliente::find($id);

        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        $obj->fill([
            'nome' =>  $request->nome,
            'email' =>  $request->email
        ]);

        $obj->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Cliente::find($id);
        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }
        find::destroy($id);
        return redirect()->route('clientes.index');
    }
}
