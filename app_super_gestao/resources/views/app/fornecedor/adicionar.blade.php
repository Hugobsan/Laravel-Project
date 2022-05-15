@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Adicionar</p>
    </div>

    @component('app.layouts._components.menu')
    @endcomponent

    <div class="informacao-pagina">
        <div class="fornecedor-pesquisa">
            <form method="post" action="{{ route('app.fornecedor.adicionar')}}">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                <input type="text" name="site" placeholder="Site" class="borda-preta">
                <input type="text" name="uf" placeholder="UF" class="borda-preta">
                <input type="email" name="email" placeholder="E-mail" class="borda-preta">
                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
        </div>
    </div>

</div>

@endsection