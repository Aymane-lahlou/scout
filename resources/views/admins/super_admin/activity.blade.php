@extends('layouts.superAdmin')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Activities</h1>

        @if($activity->isEmpty())
            <p>No activities found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>La_branche</th>
                        <th>Entité</th>
                        <th>Le siège central</th>
                        <th>type d'activité</th>
                        <th>date d'activity</th>
                        <th>Nature de l'activité</th>
                        <th>Domaine de l'activité</th>
                        <th>Nombre de bénéficiaires masculins</th>
                        <th>Nombre de bénéficiaires féminins</th>
                        <th>La population cible</th>
                        <th>Lieu de l'activité</th>
                        <th>Durée de l'activité</th>
                        <th>Rapport d'activité</th>
                        <th>Les membres du personnel impliqués dans l'activité</th>
                        <th>Les frais de l'activité</th>
                        <th>Les Revenus de l'activité</th>
                        <th>location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activity as $act)
                    <tr>
                        <td>{{ $act->getAttribute('La_branche') }}</td>
                        <td>{{ $act->getAttribute('Entité') }}</td>
                        <td>{{ $act->getAttribute('Le siège central') }}</td>
                        <td>{{ $act->getAttribute('type d\'activité') }}</td>
                        <td>{{ $act->getAttribute('date d\'activity') }}</td>
                        <td>{{ $act->getAttribute('Nature de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Domaine de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Nombre de bénéficiaires masculins') }}</td>
                        <td>{{ $act->getAttribute('Nombre de bénéficiaires féminins') }}</td>
                        <td>{{ $act->getAttribute('La population cible') }}</td>
                        <td>{{ $act->getAttribute('Lieu de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Durée de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Rapport d\'activité') }}</td>
                        <td>{{ $act->getAttribute('Les membres du personnel impliqués dans l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Les frais de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('Les Revenus de l\'activité') }}</td>
                        <td>{{ $act->getAttribute('location') }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        @endif
    </div>
@endsection
