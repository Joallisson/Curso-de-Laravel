@extends('admin.layouts.app')

@section('title', 'Editar Produto')
    

@section('content')
    <h1>Editar Produto {{$id}}</h1>

    <form action="{{route('produtos.update', $id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nome" placeholder="Nome"> <br>
        <input type="text" name="descricao" placeholder="Descrição"> <br>
        <input type="submit" value="Enviar">
    </form>

@endsection