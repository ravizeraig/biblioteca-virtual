@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <h1>Lista de Produtos</h1>
        </div>
        <div class="col-auto">
            <a href="/produtos/create" class="btn btn-primary">Criar Novo Produto</a>
        </div>
    </div>
    
    @if($produtos->isEmpty())
        <p class="alert alert-info">Nenhum produto cadastrado ainda.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td class="d-flex flex-column gap-2">
                        <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                        
                        <form action="/produtos/{{ $produto->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm me-2">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection