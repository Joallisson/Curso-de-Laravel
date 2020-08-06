@extends('admin.layouts.app')

@section('title', "Teste do Título ")

@section('content')
    <h1>Listando produtos</h1>
    @if ($teste === "123")
        É igual
    @elseif($teste === 123)
        É diferente
    @endif
    <br>
    @unless ($teste === "123")
        Entro no Unless
    @endunless

    @isset($teste2)
        <p>{{$teste2}}</p>
    @endisset

    @empty($teste2)
        <p>Vazio...</p>
    @else
        <p>A variável não está vazia</p>
    @endempty

    @auth
        <p>Usuário Autenticado</p>
    @else
        <p>Usuário não está autenticado</p>    
    @endauth

    @guest
        <p>Usuário não está autenticado</p>  
    @endguest

    @switch($teste)
        @case(1)
            <p>É 1</p>
            @break
        @case(2)
        <p>É 2</p>
            @break
        @case(123)
            <p>{{$teste}}</p>
            @break
        @default
            Padrão
    @endswitch

@endsection

