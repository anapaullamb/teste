<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ["",""])
<!-- Preenche o conteúdo da seção "titulo" -->
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

 
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Trabalho Semestral!</h1>
          <p class="lead">O trabalho bimestral tem como objetivo o desenvolvimento de uma aplicação web que contemple todos os conteúdos lecionados até o momento na disciplina de Desenvolvimento Web II. A aplicação em questão será um sistema de gerenciamento de cursos, disciplinas e professores;</p>
        
        </div>
      </div>          

      <div class="container">
      <hr class="my-4">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3">
            <h2>Jogadores</h2>
            <p><a class="btn btn-secondary" href="{{route('jogador.index')}}" role="button">Gerencie seus jogadores &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
@endsection