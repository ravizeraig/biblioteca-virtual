<?php

namespace App\Http\Controllers;

use App\Models\Produto; 
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validar os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'required|string',
            'categoria' => 'required|string|max:255',
        ]);

        // 2. Criar um novo produto no banco de dados
        Produto::create($request->all());

        // 3. Redirecionar para a página de listagem de produtos
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. Validar os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'required|string',
            'categoria' => 'required|string|max:255',
        ]);

        // 2. Encontrar o produto pelo ID
        $produto = Produto::findOrFail($id);

        // 3. Atualizar o produto no banco de dados
        $produto->update($request->all());

        // 4. Redirecionar para a página de listagem
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 1. Encontrar o produto pelo ID
        $produto = Produto::findOrFail($id);

        // 2. Apagar o produto do banco de dados
        $produto->delete();

        // 3. Redirecionar para a página de listagem
        return redirect('/produtos');
    }
}
