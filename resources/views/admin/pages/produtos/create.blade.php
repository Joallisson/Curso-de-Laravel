@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')
    

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul> 
    @endif

    <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}"> <br>
        <input type="text" name="descricao" placeholder="Descrição" value="{{old('descricao')}}"> <br>
        <input type="file" name="foto"> <br>
        <input type="submit" value="Enviar">
    </form>

@endsection