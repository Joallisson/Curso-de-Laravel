@extends('admin.layouts.app')

@section('title', "Teste do Título ")

@section('content')
    <h1>Listando produtos</h1>

    @component('admin.components.card')
        @slot('teste', "<h1>Título do Slot</h1>")
            
        Testando os Bagulhos
    @endcomponent

    <a href="{{route('produtos.create')}}">Cadastro</a>








    @include('admin.includes.alert', ['conteudo' => 'Include'])


  
    @forelse ($produtos as $produto)
        <p class="@if($loop->first) last @endif">{{$produto}}</p>
    @empty
        <p>Não existem produtos cadastrados.</p>
    @endforelse


<!-- 
 
    @if (isset($produtos))
        @foreach ($produtos as $produto)
            <p>{{$produto}}</p>
        @endforeach
    @endif

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
    -->
@endsection

@push('styles')
    <style>
        .last{
            background: gray;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#e4e6e8';
    </script>
@endpush