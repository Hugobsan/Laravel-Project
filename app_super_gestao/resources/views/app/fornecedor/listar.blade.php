@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Listar</p>
    </div>

    @component('app.layouts._components.menu')
    @endcomponent

    <div class="informacao-pagina">
        <div class="fornecedor-pesquisa">
            ... Lista ...
        </div>
    </div>

</div>

@endsection