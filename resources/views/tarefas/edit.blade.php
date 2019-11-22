@extends('layouts.app')

@section('conteudo')

<div class="container">
  <div class="col-md-offset-2 col-md-8">
    <div class="row">
      <h1>Lista de tarefas</h1>
    </div>

    {{-- display success message --}}
    @if (Session::has('successo'))
      <div class="alert alert-success">
        <strong>Success:</strong> {{ Session::get('successo') }}
      </div>
    @endif

    {{-- display error message --}}
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Erro:</strong>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="row">
      <form action="{{ route('tarefa.update', [$tarefaEditar->id]) }}" method='POST'>
      {{ csrf_field() }}
      <input type="hidden" name='_method' value='PUT'>

        <div class="form-group">
          <input type="text" name='updatedDescricaoTarefa' class='form-control input-lg' value='{{ $tarefaEditar->descricao }}'>
        </div>

        <div class="form-group">
          <input type="submit" value='Salavar Alteração' class='btn btn-success btn-lg'>
          <a href="/" class='btn btn-danger btn-lg pull-right'>Voltar</a>
        </div>
      </form>
    </div>

 
  </div>
</div>

@endsection

@section('javascript')

<script  type="text/javascript">

    $('#btVoltar').on('click', function(event) {
        location.href="/";
    });
</script>
@endsection
