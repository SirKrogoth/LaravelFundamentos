@extends('app');

@section('titulo', 'Lista de Clientes')

@section('conteudo')
    <div class="container">
      <h1>Lista de Clientes</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
            <tr>
              <th scope="row"> {{ $client->id }} </th>
              <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->nome }}</a></td>
              <td>{{ $client->endereco }}</td>
              <td>
                  <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">Atualizar</a>
                  <form action="{{ route('clients.destroy', $client) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir {{ $client->nome }} ?')" style="display: inline;">Apagar</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <a class="btn btn-success" href="{{ route('clients.create') }}">Novo Cliente</a>
    </div>
@endsection
