@extends('layout')

@section('content')
    <div class="divPage divClients edit">
        <h1>Modifier : {{ $client->name }}</h1>

        <form action="{{ route('clients.update', $client) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text">
                <label for="ref">Référence : </label>
                <input type="text" value="{{ $client->ref }}" placeholder="Référence" id="ref" name="ref ">
                @error ('ref')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="name">Nom : </label>
                <input type="text" value="{{ $client->name }}" placeholder="Nom" id="name" name="name">
                @error ('name')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="email">
                <label for="email">Email : </label>
                <input type="email" value="{{ $client->email }}" placeholder="Email" id="email" name="email">
                @error ('email')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="phone">
                <label for="phone">Numéro de téléphone : </label>
                <input type="tel" value="{{ $client->phone }}" placeholder="Numéro de téléphone" id="phone" name="phone">
                @error ('phone')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="siret">SIRET : </label>
                <input type="text" value="{{ $client->siret }}" placeholder="SIRET" id="siret" name="siret">
                @error ('siret')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="address">Adresse : </label>
                <input type="text" value="{{ $client->address }}" placeholder="Adress" id="address" name="address">
                @error ('address')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="submit">
                <input type="submit" value="Modifier le client">
            </div>
        </form>

    </div>
@endsection
