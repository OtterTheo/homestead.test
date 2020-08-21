@extends('layouts.app')

@section('content')
    <h1>Clients</h1>
      <form action="/clients" method="POST">

        @include('includes.form')

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
@endsection
