<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
    <h3>Fornecedores</h3>
    
    @isset($fornecedores)
        @forelse ($fornecedores as $indice=> $fornecedor)
            <b>Fornecedor:</b> {{$fornecedor['nome']}}
            <br>
            <b>Status:</b> {{$fornecedor['status']}}
            <br>
            <b>CNPJ:</b> {{ $fornecedor['cnpj'] ?? 'Não preenchido'}}
            <br>
            <b>Telefone</b> ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
            <br>
            {{$ddd[$fornecedor['ddd']]['cidade'] ?? 'Código de área não identificado'}} - {{$ddd[$fornecedor['ddd']]['estado'] ?? ''}}
            <br>
            <hr>
        @empty
            Não existem fornecedores cadastrados!

        @endforelse
    @endisset
</body>
</html>