<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Jogadores", 'rota' => "jogadores.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('jogadores') jogadores @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datatable 
                title="Jogadores" 
                crud="jogadores" 
                :header="['id', 'nome','email','pontuacao']" 
                :data="$dados"
                :hide="[true, false, false,false]" 
                :button="['show' => true,'delete' => true,'vinculo' => true,'update' => false]" 
            />

        </div>
    </div>
@endsection