@extends('layout')

@section('content')
    <div class="divPage divAccount edit">
        <h1>Modifier mon compte</h1>

        <form action="{{route('users.update', $user)}}" method="POST" class="account">
            @csrf
            @method('PUT')
            <div class="top">
                <h2>Coordonnées</h2>
                <div class="text">
                    <label for="name">Nom : </label>
                    <input type="text" value="{{ $user->name }}" placeholder="Nom" id="name" name="name">
                    @error ('name')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="email">
                    <label for="email">Email : </label>
                    <input type="email" value="{{ $user->email }}" placeholder="Email" id="email" name="email" readonly>
                    @error ('email')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="email">
                    <label for="contact-email">Email de contact : </label>
                    <input type="email" value="{{ $user->contact_email }}" placeholder="Email de contact" id="contact-email" name="contact_email">
                    @error ('contact_email')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="phone">
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" value="{{ $user->phone }}" placeholder="Numéro de téléphone" id="phone" name="phone">
                    @error ('phone')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="bottom">
                <div class="left">
                    <h2>Entreprise</h2>
                    <div class="text">
                        <label for="address">Adresse : </label>
                        <input type="text" value="{{ $user->address }}" placeholder="Adresse de l'entreprise" id="address" name="address">
                        @error ('address')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="siret">SIRET : </label>
                        <input type="text" value="{{ $user->siret }}" placeholder="Numéro de SIRET" id="siret" name="siret">
                        @error ('siret')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="ape">APE : </label>
                        <input type="text" value="{{ $user->ape }}" placeholder="Code APE" id="ape" name="ape">
                        @error ('ape')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="right">
                    <h2>Banque</h2>
                    <div class="text">
                        <label for=account_user">Titulaire : </label>
                        <input type="text" value="{{ $user->account_user }}" placeholder="Titulaire du compte" id="account_user" name="account_user">
                        @error ('account_user')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="domiciliation">Domiciliation : </label>
                        <input type="text" value="{{ $user->bank_domiciliation }}" placeholder="Domiciliation" id="domiciliation" name="domiciliation">
                        @error ('domiciliation')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="rib">RIB : </label>
                        <input type="text" value="{{ $user->rib }}" placeholder="RIB" id="rib" name="rib">
                        @error ('rib')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="iban">IBAN : </label>
                        <input type="text" value="{{ $user->iban }}" placeholder="IBAN" id="iban" name="iban">
                        @error ('iban')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text">
                        <label for="bic">BIC : </label>
                        <input type="text" value="{{ $user->bic }}" placeholder="BIC" id="bic" name="bic">
                        @error ('bic')
                        <div class="invalid">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="submit">
                        <input type="submit" id="submit" value="Modifier mon compte">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
