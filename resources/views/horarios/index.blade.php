<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Clientes", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('cliente') clientes @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datatable 
                title="Clientes" 
                crud="clientes" 
                :header="['id', 'nome','email']" 
                :data="$dados"
                :hide="[true, false, false]" 
                :button="['show' => true,'delete' => true, 'vinculo' => true]" 
            />

        </div>
    </div>
@endsection