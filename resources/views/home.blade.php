@extends('layouts.app')
    
@section('conteudo')

      <div class="container" style='margin-top: 10px; margin-bottom: 10px;'>
        <div class="row">
          <h1>Lista de tarefas</h1>
        </div>
        <form role="form" action="#" method="POST">
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
       

        {{-- exibir mensagem de erro --}}
        
      <div class="container">
          <div class="row">
          {{-- exibir tarefas quando criadas --}}
          
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th scope="col" >#</th>
                  <th scope="col" class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Descrição</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              
            </table>
            
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
