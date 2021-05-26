@extends('app');

@section('titulo', 'Detakhes do Cliente')

@section('conteudo')
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Detalhes do cliente {{ $clients->nome }} </h5>
        <p><strong>ID:</strong>{{ $clients->id }}</p>
        <p><strong>Nome:</strong>{{ $clients->nome }}</p>
        <p><strong>Endereço:</strong>{{ $clients->endereco }}</p>
        <p><strong>Observação:</strong>{{ $clients->observacao }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <br>
        <a class="btn btn-primary" href="{{ route('clients.index') }}">Voltar</a>
        </div>
    </div>
@endsection
