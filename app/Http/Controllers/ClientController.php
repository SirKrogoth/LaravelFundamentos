<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function show(int $id)
    {
        $client = Client::find($id);

        return view('clients.show', [
            'clients' => $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect()->route('clients.index');
    }

    public function edit(int $id)
    {
        $dados = Client::find($id);

        return view('clients.edit',[
            'client' => $dados
        ]);
    }

    public function update(int $id, Request $request)
    {
        $dados = Client::find($id);

        $dados->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect()->route('clients.index');
    }

    public function destroy(int $id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.index');
    }

}
