@csrf
<div class="form-group">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Entrer un nom"
           value=" {{ old('name')  ??  $client->name }}">
    @error('name')
    <div class="invalid-feedback">
        Veuiller remplir le champ.
    </div>
    @enderror
</div>
<div class="form-group">
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
           placeholder="Entre un email" value="{{ old('email')  ??  $client->email }}">
    @error('email')
    <div class="invalid-feedback">
        Veuiller remplir le champ.
    </div>
    @enderror
</div>
<div class="form-group">
    <select class="custom-select  @error('status') is-invalid @enderror" name="status">
        @foreach($client->getStatusOptions() as $key => $value)
            <option value="{{ $key }}" {{ $client->status == $value ? 'selected' : ''}}>{{ $value }}</option>
        @endforeach


    </select>
    @error('status')
    <div class="invalid-feedback">
        Veuiller remplir le champ.
    </div>
    @enderror
</div>
<div class="form-group">
    <select class="custom-select  @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
        @foreach($entreprises as $entreprise)
            <option
                value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'selected' : '' }}>{{$entreprise->name}}</option>
        @endforeach

    </select>
    @error('entreprise_id')
    <div class="invalid-feedback">
        Veuiller remplir le champ.
    </div>
    @enderror
</div>
