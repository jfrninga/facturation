@extends('layout')

@section('content')
    <div class="divPage divMissions create">
        <h1>Ajouter une mission</h1>
        <form action="{{ route('missions.store', $client) }}" method="POST">
            @csrf

            <div class="text">
                <label for="title">Titre : </label>
                <input type="text" value="{{ old('title') }}" placeholder="Titre" id="title" name="title">
                @error ('title')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="ref">Référence : </label>
                <input type="text" value="{{ old('ref') }}" placeholder="Référence" id="ref" name="ref">
                @error ('ref')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>

            <div class="submit">
                <input type="submit" value="Ajouter la mission">
            </div>
        </form>
    </div>
@endsection
