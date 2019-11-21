<!DOCTYPE html>
{{-- <html lang="{{ config('app.locale') }}"> --}}
<html lang="pt-br">

    @include('layouts.head')

    <body>
        <style>
            body {
                padding-top: 60px;
                padding-left: 50px;
                padding-right: 50px;
            }
        </style>
        
        @include('layouts.menu')

        <div class="container">

            @yield("conteudo")

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}" charset="utf-8" ></script> -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8" ></script>
        @yield("javascript")

    </body>
</html>
