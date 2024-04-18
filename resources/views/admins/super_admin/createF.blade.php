@extends('layouts.superAdmin')

@section('content')
    <h1>Create Filiere Admin</h1>
    <form action="{{ route('filiere.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <select name="region" id="region">
            <option value="">Select Region</option>
            <option value="Casablanca-Settat">Casablanca-Settat</option>
            <option value="Marrakech-Safi">Marrakech-Safi</option>
            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
            <option value="Fès-Meknès">Fès-Meknès</option>
            <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
            <option value="Oriental">Oriental</option>
            <option value="Beni Mellal-Khénifra">Beni Mellal-Khénifra</option>
            <option value="Souss-Massa">Souss-Massa</option>
            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
            <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
        </select>
        <div>
            <label for="fillier">Filière:</label>
            <input type="text" id="fillier" name="fillier" required>
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
