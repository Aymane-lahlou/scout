@extends('layouts.superAdmin')

@section('content')
    <h1>Filière Admins</h1>

    @if($filiereAdmins->isEmpty())
        <p>No filière admins found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Région</th>
                    <th>Filière</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($filiereAdmins as $admin)
                    <tr>
                        <td>{{ $admin->nom }}</td>
                        <td>{{ $admin->prenom }}</td>
                        <td>{{ $admin->region }}</td>
                        <td>{{ $admin->fillier }}</td>
                        <td>{{ $admin->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
