<?php

namespace App\Http\Controllers;

Use \App\Models\CategoriasFavorita;
Use \App\Models\Categoria;
Use \App\Models\Jogador;
use Illuminate\Http\Request;

class CategoriaFavoritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = CategoriasFavorita::where('jogador', 1)->get();
        $categoriasFavoritas = "categoriasFavoritas";
        return view('categoriasFavoritas.show', compact(['dados', 'categoriasFavoritas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $dados = CategoriasFavorita::where('jogador', $id)->get();
        $categorias = Categoria::whereNotIn('id', $dados->pluck('categoria'))->get();
        return view('categoriasFavoritas.create', compact(['categorias', 'id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CategoriasFavorita::create([
            'jogador' =>  $request->id,
            'categoria' =>  $request->categoria,
        ]);
        return redirect()->route('categoriasFavoritas.show',$request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = CategoriasFavorita::where('jogador', $id)->get();
        $categoriasFavoritas = "categoriasFavoritas";
        return view('categoriasFavoritas.show', compact(['dados', 'categoriasFavoritas']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
