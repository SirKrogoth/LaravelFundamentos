@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')
    <h1>Novo Cliente</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe aqui seu nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe aqui seu endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secundary">Voltar</a>
    </form>
@endsection
