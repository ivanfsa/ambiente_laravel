@extends('layouts.app')
    
@section('conteudo')

      <div class="container" style='margin-top: 10px; margin-bottom: 10px;'>
        <div class="row">
          <h1>Lista de tarefas</h1>
        </div>
        <form role="form" action="{{ route('tarefa.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col">
              <input type="text" class=" form-control" name='novaTarefa' placeholder="Digite a tarefa aqui">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary ">Salvar</button>
            </div>
          </div>
        </form>
      </div>
      {{-- exibir mensagem de successo --}}
        @if (Session::has('successo'))
          <div class="alert alert-success">
            <strong>Successo:</strong> {{ Session::get('successo') }}
          </div>
        @endif

        {{-- exibir mensagem de erro --}}
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Error:</strong>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <div class="container">
          <div class="row">
          {{-- exibir tarefas quando criadas --}}
          @if (count($tarefas) > 0)
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th scope="col" >#</th>
                  <th scope="col" class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Descrição</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              @foreach ($tarefas as $tarefa)
              <tbody>
                <tr>
                  <th scope="row">{{ $tarefa->id }}</th>
                  <td>{{ $tarefa->descricao }}</td>
                  <td><a href="{{ route('tarefa.edit', ['tarefa'=>$tarefa->id]) }}" class='btn btn-info'>Editar</a></td>
                  <!-- href="{ { route('tasks.edit', ['tasks'=>$storedTask->id]) "  -->
                  <td>
                   <!-- action="{ { route('tasks.destroy', ['tasks'=>$storedTask->id]) " -->
                    <form action="{{ route('tarefa.destroy', ['tarefa'=>$tarefa->id]) }}" method='POST'>
                      {{ csrf_field() }}
                      <input type="hidden" name='_method' value='DELETE'>

                      <input type="submit" class='btn btn-danger' value='Excluir'>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
            @endif
          </div>
      </div>

@endsection
@section('javascript')

    <script  type="text/javascript">

        $('#btnNovo').on('click', function(event) {
            location.href="/tarefa/create";
        });
        </script>
@endsection
