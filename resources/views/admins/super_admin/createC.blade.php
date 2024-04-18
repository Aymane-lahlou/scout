@extends('layouts.superAdmin')

@section('content')
    <h1>Create Central Admin</h1>
    <form action="{{ route('central.storeC') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="association_id">Association ID:</label>
            <input type="number" id="association_id" name="association_id" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
