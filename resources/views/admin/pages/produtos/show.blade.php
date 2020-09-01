@extends('admin.layouts.app')

@section('title', "Detalhes do Produto {$produto->nome}")
    

@section('content')
<h1>Produto {{ $produto->nome }}</h1>

<h5><a href="{{ route('produtos.index') }}">Volar</a></h5>

<ul>
    <li><strong>Nome: </strong> {{ $produto->nome }}</li>
    <li><strong>Price: </strong> {{ $produto->price }}</li>
    <li><strong>Descrição: </strong> {{ $produto->descrição }}</li>
</ul>
@endsection