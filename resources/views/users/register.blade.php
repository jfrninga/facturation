@extends('layout')

@section('content')
    <div class="divPage divAccount register">
        <h1 class="text-center">Merci de vous inscrire.</h1>

        <form action="{{ route('users.registration') }}" method="POST" class="account">
            @csrf
            <input type="hidden" value="{{ $github_id }}" name="github_id">
            <div class="top">
                <h2>Coordonnées</h2>
                <div class="text">
                    <label for="name">Nom : </label>
                    <input type="text" value="{{ $name }}" placeholder="Nom" id="name" name="name">
                    @error ('name')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="email">
                    <label for="email">Email : </label>
                    <input type="email" value="{{ $email }}" placeholder="Email" id="email" name="email" readonly>
                    @error ('email')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="email">
                    <label for="contact-email">Email de contact : </label>
                    <input type="email" value="{{ old('contact_email') }}" placeholder="Email de contact" id="contact-email" name="contact_email">
                    @error ('contact_email')
                        <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="phone">
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" value="{{ old('phone') }}" placeholder="Numéro de téléphone" id="phone" name="phone">
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
                    <input type="text" value="{{ old('address') }}" placeholder="Adresse de l'entreprise" id="address" name="address">
                    @error ('address')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text">
                    <label for="siret">SIRET : </label>
                    <input type="text" value="{{ old('siret') }}" placeholder="Numéro de SIRET" id="siret" name="siret">
                    @error ('siret')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text">
                    <label for="ape">APE : </label>
                    <input type="text" value="{{ old('ape') }}" placeholder="Code APE" id="ape" name="ape">
                    @error ('ape')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="right">
            <h2>Banque</h2>
            <div class="text">
                <label for="bank-incumbent">Titulaire : </label>
                <input type="text" value="{{ old('account_user') }}" placeholder="Titulaire du compte" id="account_user" name="account_user">
                @error ('account_user')
                <div class="invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="domiciliation">Domiciliation : </label>
                <input type="text" value="{{ old('domiciliation') }}" placeholder="Domiciliation" id="domiciliation" name="domiciliation">
                @error ('domiciliation')
                <div class="invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="rib">RIB : </label>
                <input type="text" value="{{ old('rib') }}" placeholder="RIB" id="rib" name="rib">
                @error ('rib')
                <div class="invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="iban">IBAN : </label>
                <input type="text" value="{{ old('iban') }}" placeholder="IBAN" id="iban" name="iban">
                @error ('iban')
                <div class="invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="bic">BIC : </label>
                <input type="text" value="{{ old('bic') }}" placeholder="BIC" id="bic" name="bic">
                @error ('bic')
                <div class="invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="submit">
                <input type="submit" value="S'inscrire">
            </div>
        </div>
        </div>
        </form>
    </div>
@endsection
