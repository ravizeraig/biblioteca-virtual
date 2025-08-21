@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Criar Novo Produto</h1>
        </div>
    </div>

    <form method="POST" action="/produtos">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao"></textarea>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Produto</button>
        <a href="/produtos" class="btn btn-secondary">Voltar para a lista</a>
    </form>
@endsection