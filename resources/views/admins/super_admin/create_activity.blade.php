@extends('layouts.superAdmin')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1>Create New Activity</h1>

        <form method="POST" action="{{ route('activity.store') }}">
            @csrf

            <div class="form-group">
                <label for="La_branche">La_branche</label>
                <input type="text" name="La_branche" class="form-control" placeholder="La_branche">
            </div>

            <div class="form-group">
                <label for="Entité">Entité</label>
                <input type="text" name="Entité" class="form-control" placeholder="Entité">
            </div>

            <div class="form-group">
                <label for="Le_siège_central">Le siège central</label>
                <input type="text" name="Le_siège_central" class="form-control" placeholder="Le siège central">
            </div>

            <div class="form-group">
                <label for="type_d_activité">Type d'activité</label>
                <input type="text" name="type_d_activité" class="form-control" placeholder="Type d'activité">
            </div>

            <div class="form-group">
                <label for="date_d_activity">Date d'activity</label>
                <input type="date" name="date_d_activity" class="form-control" placeholder="Date d'activity">
            </div>

            <div class="form-group">
                <label for="Nature_de_l_activité">Nature de l'activité</label>
                <input type="text" name="Nature_de_l_activité" class="form-control" placeholder="Nature de l'activité">
            </div>

            <div class="form-group">
                <label for="Domaine_de_l_activité">Domaine de l'activité</label>
                <input type="text" name="Domaine_de_l_activité" class="form-control" placeholder="Domaine de l'activité">
            </div>

            <div class="form-group">
                <label for="Nombre_de_bénéficiaires_masculins">Nombre de bénéficiaires masculins</label>
                <input type="number" name="Nombre_de_bénéficiaires_masculins" class="form-control" placeholder="Nombre de bénéficiaires masculins">
            </div>

            <div class="form-group">
                <label for="Nombre_de_bénéficiaires_féminins">Nombre de bénéficiaires féminins</label>
                <input type="number" name="Nombre_de_bénéficiaires_féminins" class="form-control" placeholder="Nombre de bénéficiaires féminins">
            </div>

            <div class="form-group">
                <label for="La_population_cible">La population cible</label>
                <input type="text" name="La_population_cible" class="form-control" placeholder="La population cible">
            </div>

            <div class="form-group">
                <label for="Lieu_de_l_activité">Lieu de l'activité</label>
                <input type="text" name="Lieu_de_l_activité" class="form-control" placeholder="Lieu de l'activité">
            </div>

            <div class="form-group">
                <label for="Durée_de_l_activité">Durée de l'activité</label>
                <input type="text" name="Durée_de_l_activité" class="form-control" placeholder="Durée de l'activité">
            </div>

            <div class="form-group">
                <label for="Rapport_d_activité">Rapport d'activité</label>
                <input type="text" name="Rapport_d_activité" class="form-control" placeholder="Rapport d'activité">
            </div>

            <div class="form-group">
                <label for="Les_membres_du_personnel_impliqués_dans_l_activité">Les membres du personnel impliqués dans l'activité</label>
                <input type="text" name="Les_membres_du_personnel_impliqués_dans_l_activité" class="form-control" placeholder="Les membres du personnel impliqués dans l'activité">
            </div>
            <div class="form-group">
                <label for="Les_frais_de_l_activité">Les frais de l'activité</label>
                <input type="number" name="Les_frais_de_l_activité" class="form-control" placeholder="Les frais de l'activité">
            </div>

            <div class="form-group">
                <label for="Les_Revenus_de_l_activité">Les Revenus de l'activité</label>
                <input type="number" name="Les_Revenus_de_l_activité" class="form-control" placeholder="Les Revenus de l'activité">
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Location">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
