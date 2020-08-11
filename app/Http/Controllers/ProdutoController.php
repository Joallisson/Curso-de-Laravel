<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    protected $request;

    function __construct(Request $request)
    {
        //$this->request = $request;
        //$this->middleware('auth')->only('create');  //Só vai pedir pra autenticar no create
        //$this->middleware('auth')->except([
           // 'index', 'show'
    //]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $teste2 = 5463;
        $teste3 = [1, 2, 3, 4, 5];
        $produtos = ['TV', 'Geladeira', 'PC', 'Impressora'];
        return view('admin.pages.produtos.index', compact('teste','teste2', 'teste3', 'produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->except(['_token','nome']));
        //dd($request->input('ffff', 'vvvv')); //Caso não seja encontrado o primeiro parâmetro, ele exibe o segundo
        //dd($request->has('nome'));
        //d($request->descricao);
        //dd($request->all());
        //dd($request->only('nome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Exibindo produto: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.produtos.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
