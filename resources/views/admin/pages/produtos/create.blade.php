@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')
    

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    <form action="{{route('produtos.store')}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome"> <br>
        <input type="text" name="descricao" placeholder="Descrição"> <br>
        <input type="submit" value="Enviar">
    </form>

@endsection