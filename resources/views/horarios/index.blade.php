<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Horarios", 'rota' => "horarios.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('horario') horarios @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datatable 
                title="Horarios" 
                crud="horarios" 
                :header="['id', 'horario','vagas']" 
                :data="$dados"
                :hide="[true, false, false]" 
                :button="['show' => false,'delete' => true, 'vinculo' => true]" 
            />

        </div>
    </div>
@endsection