<h2>fornecedor</h2>

@php

@endphp

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
    
    Iteração atual: {{$loop->iteration}}
    <br>
        fornecedor: {{$fornecedor['nome']}}
    <br>
        status: {{$fornecedor['status']}}
    <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
    <br>
        Telefone: ({{$fornecedor['ddd'] ?? 'Dado não foi preenchido'}}) {{$fornecedor['telefone'] ?? ''}}
    <br>
        @if($loop->first)
            Primeira iteração do loop
        @endif
        @if($loop->last)
            última iteração do loop

            <br>
            Total de registros: {{ $loop->count}}
        @endif
        <hr>
    @empty
        não existem fornecedores cadastrados
    @endforelse
@endisset
