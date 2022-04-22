@extends('layout')

@section('content')
    <div class="divPage divMissions show">
        <h1>{{ $mission->title }}</h1>

        <div class="data">
            <div><span class="bold">Titre :</span> {{ $mission->title }}</div>
            <div><span class="bold">Référence :</span> {{ $mission->ref }}</div>
        </div>
        <div class="bottom">
            <div class="edit">
                <a href="{{ route('missions.edit', $mission) }}" title="Modifier la mission"
                   class="button blue">Modifier</a>
            </div>
            <div class="delete">
                <form action="{{ route('missions.destroy', $mission) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" id="destroy" name="destroy" value="Supprimer"
                           class="button danger">
                </form>
            </div>
        </div>

        <div class="list">
            <h2>Liste des lignes de mission</h2>
            <div class="add">
                <a href="{{ route('missionTasks.create', $mission) }}" title="Ajouter une mission"
                   class="button red">Ajouter
                    une mission</a>
            </div>
            @if(count($mission->missionTasks) < 1)
                <div class="empty text-center">
                    Aucune ligne de mission.
                </div>
            @else
                <table>
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total TTC</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mission->missionTasks as $missionTask)
                        <tr>
                            <td>{{ $missionLine->designation }}</td>
                            <td>{{ $missionLine->quantite }}</td>
                            <td>{{ $missionLine->unit_price }} €</td>
                            <td>{{ $missionLine->total }} €</td>
                            <td class="text-right">
                                <a href="{{ route('missionTasks.edit', $missionTask) }}"
                                   title="Modifier la ligne de mission"
                                   class="button blue">Modifier</a>
                            </td>
                            <td class="text-right">
                                <form action="{{ route('missionTasks.destroy', $missionTask) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" id="destroy" name="destroy" value="Supprimer"
                                           class="button danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
