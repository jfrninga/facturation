@extends('layout')

@section('content')
    <div class="divPage divAccount">
        <h1>Mon compte</h1>

        <div class="columns">
            <div class="left">
                <h2>Mes coordonnées</h2>
                <div><span class="bold">Nom :</span> {{ $user->name }}</div>
                <div><span class="bold">Email :</span> {{ $user->email }}</div>
                <div><span class="bold">Email de contact :</span> {{ $user->contact_email }}</div>
                <div><span class="bold">Téléphone :</span> {{ $user->phone }}</div>
            </div>
            <div class="middle">
                <h2>Entreprise</h2>
                <div><span class="bold">Adresse :</span> {{ $user->address }}</div>
                <div><span class="bold">SIRET :</span> {{ $user->siret }}</div>
                <div><span class="bold">APE :</span> {{ $user->ape }}</div>
            </div>
            <div class="right">
                <h2>Banque</h2>
                <div><span class="bold">Titulaire :</span> {{ $user->account_user }}</div>
                <div><span class="bold">Domiciliation :</span> {{ $user->domiciliation }}</div>
                <div><span class="bold">RIB :</span> {{ $user->rib }}</div>
                <div><span class="bold">IBAN :</span> {{ $user->iban }}</div>
                <div><span class="bold">BIC :</span> {{ $user->bic }}</div>
            </div>
        </div>
        <div class="bottom">
            <div class="edit">
                <a href="{{ route('users.edit', $user) }}" title="Modifier mon compte" class="button">Modifier mon
                    compte</a>
            </div>
            <div class="delete">
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" id="destroy" name="destroy" value="Supprimer mon compte"
                           class="button danger">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection



