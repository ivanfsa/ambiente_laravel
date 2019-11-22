<!DOCTYPE html>
{{-- <html lang="{{ config('app.locale') }}"> --}}
<html lang="pt-br">

  <!-- Importando o arquivo head.blade.php -->
    @include('layouts.head')

    <body>
        <style>
            body {
                padding-top: 60px;
                padding-left: 50px;
                padding-right: 50px;
            }
        </style>
        
        <!-- Importando o arquivo menu.blade.php -->
        @include('layouts.menu')

        <div class="container">

            <!-- Espaço reservado para o conteúdo dos outros arquivos blade.php 
                 para usar esse espaço o arquivo precisa abrir uma sessão: @section('conteudo') 
                 OBS: dentro do arquivo home.blade.php tem o exemplo de como usar 
            -->
            @yield("conteudo")

        </div>

        <!-- Usando o JQyuery OnLine -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <!-- você pode copiar o arquivo JQuery para o seu projeto e informará esse comando 
            <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}" charset="utf-8" ></script> 
        -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8" ></script>

        <!-- Similar o "conteudo", esse espaço será reservado para arquivos JavaScript 
                 nos outros arquivos blade.php 
                 para usar esse espaço o arquivo precisa abrir uma sessão: @section('javascript') 
                 OBS: dentro do arquivo home.blade.php tem o exemplo de como usar 
            -->
        @yield("javascript")

    </body>
</html>
