@extends('app')

@section('titulo', 'Atualizar Cliente')

@section('conteudo')
    <h1>Atualizar Cliente</h1>

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome" placeholder="Informe aqui seu nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" value="{{ $client->endereco }}" id="endereco" name="endereco" placeholder="Informe aqui seu endereço" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" required>{{ $client->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secundary">Voltar</a>
    </form>
@endsection
