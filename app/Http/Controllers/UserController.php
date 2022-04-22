<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', ['user' => Auth::user()]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user], ['user' => Auth::user()]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $input = $request->only([

            'name',
            'contact_email',
            'phone',
            'address',
            'ape',
            'siret',
            'account_user',
            'domiciliation',
            'rib',
            'iban',
            'bic',
        ]);

        $user->update($input);

        return redirect(route('users.index'));
    }

    public function destroy(Client $client)
    {
        foreach (Auth::user()->clients as $client) {
            $client->delete();
        }
        Auth::user()->delete();
        return redirect(route('index'));
    }
}
