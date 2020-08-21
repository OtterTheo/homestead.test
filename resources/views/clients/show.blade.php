@extends('layouts.app')

@section('content')
    <h1>{{ $client->name }}</h1>
    <a class="btn btn-secondary my-3" href="/clients/{{ $client->id }}/edit">Editer</a>
    <form action="/clients/{{ $client->id }} " method="POST" style="display: inline;" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <hr>
    <p><strong>Email : </strong> {{ $client->email }} </p>
    <p><strong>Entreprise : </strong> {{ $client->entreprise->name }} </p>
@endsection
