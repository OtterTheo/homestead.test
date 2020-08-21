@extends('layouts.app')

@section('content')

    @csrf
    @if(!session()->has('message'))
        <h1>Contactez nous !</h1>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       placeholder="Entre un nom" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    Veuiller remplir le champ.
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       placeholder="Entre un email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    Veuiller remplir le champ.
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="3"
                          placeholder="Entrer votre message">{{ old('message') }}</textarea>
                @error('message')
                <div class="invalid-feedback">
                    Veuiller remplir le champ.
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    @endif
@endsection


