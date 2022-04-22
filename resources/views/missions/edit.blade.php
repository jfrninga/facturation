@extends('layout')

@section('content')
    <div class="divPage divMissions edit">
        <h1>Modifier : {{ $mission->name }}</h1>

        <form action="{{ route('missions.update', $mission) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text">
                <label for="title">Titre : </label>
                <input type="text" value="{{ $mission->title }}" placeholder="Titre" id="title" name="title">
                @error ('title')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="ref">Référence : </label>
                <input type="text" value="{{ $mission->ref }}" placeholder="Référence" id="ref" name="ref">
                @error ('ref')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>

            <div class="submit">
                <input type="submit" value="Modifier la mission">
            </div>
        </form>

    </div>
@endsection
