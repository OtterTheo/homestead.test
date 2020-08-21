<?php

namespace App\Http\Controllers;

use App\Client;
use App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index()
    {

        $clients = Client::all();
        $entreprises = Entreprise::all();

        return view('clients.index', compact('clients', 'entreprises'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();
        return view('clients.create', compact('entreprises', 'client'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'entreprise_id' => 'required|integer'
        ]);
        Client::create($data);

        return back();
    }

    public function show(Client $client)
    {
        //quand on spécifie le type de la variable dans la fonction, on n'a pas besoin de mettre la ligne en dessous de celle-ci
        //$client = Client::where('id', $client)->firstOrFail();

        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();
        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'entreprise_id' => 'required|integer'
        ]);
        $client->update($data);

        return redirect('clients/' . $client->id);
    }

    public function destroy (Client $client) {

        try {
            $client->delete();
        } catch (\Exception $e) {
        }

        return redirect('clients');
    }
}
