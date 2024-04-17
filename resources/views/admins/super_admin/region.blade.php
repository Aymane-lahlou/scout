@extends('layouts.superAdmin')

@section('content')
    <h1>Region Admins</h1>

    @if($regionAdmins->isEmpty())
        <p>No region admins found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Région</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($regionAdmins as $admin)
                    <tr>
                        <td>{{ $admin->nom }}</td>
                        <td>{{ $admin->prenom }}</td>
                        <td>{{ $admin->region }}</td>
                        <td>{{ $admin->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
