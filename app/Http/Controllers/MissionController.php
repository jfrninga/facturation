<?php

namespace App\Http\Controllers;

use App\Http\Requests\MissionRequest;
use App\Models\Client;
use App\Models\Mission;
use App\Models\MissionLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function create(Client $client)
    {
        return view('missions.create', ['client' => $client]);
    }

    public function store(MissionRequest $request, Client $client)
    {
        $input = $request->safe()->only([
            'title',
            'ref',
        ]);
        $mission = $client->missions()->create($input);
        return redirect(route('clients.show', $client));
    }

    public function show(Client $client, Mission $mission)
    {
        return view('missions.show', ['client' => $client], ['mission' => $mission]);
    }

    public function edit(Mission $mission)
    {
        return view('missions.edit', ['mission' => $mission]);
    }

    public function update(MissionRequest $request, Mission $mission, Client $client)
    {
        $input = $request->only([
            'title',
            'ref',
        ]);
        $mission->update($input);
        return redirect(route('missions.show', $mission));
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();
        return redirect(route('missions.show'));
    }
}
