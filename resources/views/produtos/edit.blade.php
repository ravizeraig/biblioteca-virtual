@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Editar Produto</h1>
        </div>
    </div>

    <form method="POST" action="/produtos/{{ $produto->id }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao">{{ $produto->descricao }}</textarea>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $produto->categoria }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        <a href="/produtos" class="btn btn-secondary">Voltar para a lista</a>
    </form>
@endsection