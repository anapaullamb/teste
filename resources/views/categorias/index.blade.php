<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Categorias", 'rota' => "categorias.index"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('categorias') categorias @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datatable 
                title="Categorias" 
                crud="categorias" 
                :header="['id', 'nome']" 
                :data="$dados"
                :hide="[true, false, false,false]" 
                :button="['show' => true,'delete' => false,'vinculo' => false,'update' => false]" 
            />

        </div>
    </div>
@endsection