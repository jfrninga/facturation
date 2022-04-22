<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController
{
    public function index()
    {

        return view("user.index", ['users' => Client::all()]);
    }


    public function create()
    {
//        $client = $post->clients()->create([
//            'message' => 'A new comment.',
//        ]);
        return view("User.create");
    }


    public function store(StoreUserRequest $request)
    {
        $input = $request->only(
            [
              'user_id',
              'name_entreprise',
              'email',
              'phone',
              'address',
              'siret',
              'ref'
            ]);
//         dd($input);
        Auth::user()->clients()->create($input);

        return redirect()->route('index');

    }


    public function show(Client $client)
    {

    }


    public function edit(Client $client)
    {

    }



    public function destroy(Client $client)
    {

    }
}
