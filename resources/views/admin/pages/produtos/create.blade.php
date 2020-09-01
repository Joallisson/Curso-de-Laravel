@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')
    

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alert')

    <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{old('nome')}}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Preço" value="{{old('price')}}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="Descrição" value="{{old('descricao')}}"> 
        </div>

        <div class="form-group">
            <input type="file" name="imagem">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Enviar"> 
        </div>

    </form>

@endsection