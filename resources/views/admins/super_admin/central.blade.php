
@extends('layouts.superAdmin')

@section('content')
    <h1>Central Admins List</h1>

    @if($centrals->isEmpty())
        <p>No central admins found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Association ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($centrals as $central)
                    <tr>
                        <td>{{ $central->id }}</td>
                        <td>{{ $central->nom }}</td>
                        <td>{{ $central->prenom }}</td>
                        <td>{{ $central->email }}</td>
                        <td>{{ $central->association_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
