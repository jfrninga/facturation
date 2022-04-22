@extends('layout')



    <div class="container">
        <h1>Add new client</h1>

        <form action="{{route('clients.store')}}" method="POST" class="my-3">
            @csrf

            <input type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}" name="user_id" required>

            <div class="form-row">
                <div class="col-md-4">
                    <label class="name" for="name">Nom de l'entreprise :</label>
                    <input type="text" id="name_entreprise" value="{{old('name_entreprise')}}" name="name_entreprise" class="form-control  @error('name')is-invalid @enderror" id="name_entreprise" name="name_entreprise">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label"> Email : </label>
                    <input type="email" value="{{ old('email') }}" placeholder="Email" class="form-control" id="email" name="email">
                    @error ('email')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="phone" class="form-label"> Numéro de téléphone : </label>
                    <input type="tel" value="{{ old('phone') }}" placeholder="Numéro de téléphone" class="form-control" id="phone" name="phone">
                    @error ('phone')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="inputAdresse" class="form-label">Adresse de l'entreprise : </label>
                    <input type="text" value="{{ old('address') }}" placeholder="Adresse de l'entreprise" class="form-control" id="address" name="address">
                    @error ('address')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="inputNumberSiret" class="form-label"> SIRET : </label>
                    <input type="text" value="{{ old('siret') }}" placeholder="Numéro de SIRET" class="form-control" id="siret" name="siret">
                    @error ('siret')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="inputNumberSiret" class="form-label"> REFERENCE : </label>
                    <input type="text" value="{{ old('ref') }}" placeholder="Numéro de REFERENCE" class="form-control" id="ref" name="ref">
                    @error ('ref')
                    <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <input class="btn btn-primary md-4" type="submit" id="submit" value="create user">
        </form>
    </div>


