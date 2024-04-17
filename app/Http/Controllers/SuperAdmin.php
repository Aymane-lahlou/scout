<?php

namespace App\Http\Controllers;

use App\Models\MemberScouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;

class SuperAdmin extends Controller
{

    public function index()
    {
        $members = MemberScouts::paginate(10);

        return view('admins.super_admin.member', compact('members'));
    }

    public function create()
    {
        return view('admins.super_admin.create');
    }


    public function store(Request $request)
{
    try {
        $data = [
            'Nom complet en arabe' => $request->input('Nom_complet_en_arabe'),
            'Sexe' => $request->input('Sexe'),
            'État civil' => $request->input('État_civil'),
            'Nombre d\'enfants' => $request->input('Nombre_d_enfants'),
            'Date de naissance' => $request->input('Date_de_naissance'),
            'Lieu de naissance' => $request->input('Lieu_de_naissance'),
            'L\'adresse' => $request->input('L_adresse'),
            'La ville' => $request->input('La_ville'),
            'CIN' => $request->input('CIN'),
            'Numéro de téléphone' => $request->input('Numéro_de_téléphone'),
            'Numéro WhatsApp' => $request->input('Numéro_WhatsApp'),
            'Facebook' => $request->input('Facebook'),
            'Email' => $request->input('Email'),
            'Password' => $request->input('Password'),
            'niveau d\'étude' => $request->input('niveau_d_étude'),
            'Spécialisation' => $request->input('Spécialisation'),
            'Niveau de langue arabe' => $request->input('Niveau_de_langue_arabe'),
            'Niveau de langue amazighe' => $request->input('Niveau_de_langue_amazighe'),
            'Niveau de langue française' => $request->input('Niveau_de_langue_française'),
            'Niveau de langue anglais' => $request->NLA,
            'Niveau de langue espagnole' => $request->input('Niveau_de_langue_espagnole'),
            'Autres langues' => $request->input('Autres_langues'),
            'Situation professionnelle' => $request->input('Situation_professionnelle'),
            'Spécialité professionnelle' => $request->input('Spécialité_professionnelle'),
            'Années d\'expérience' => $request->input('Années_d_expérience'),
            'Region' => $request->input('Region'),
            'date d\'adhésion à l\'association' => $request->input('date_d_adhésion_à_l_association'),
            'membre actif Dans l\'association' => $request->membre_actif_Dans_l_association,
            'Responsabilité au sein de l\'association' => $request->input('Responsabilité_au_sein_de_l_association'),
            'Formation acquise' => $request->input('Formation_acquise'),
            'fillier' => $request->input('fillier'),
            'Prise de mesure pour les vêtements' => $request->input('Prise_de_mesure_pour_les_vêtements'),
            'L\'appartenance politique' => $request->input('L_appartenance_politique'),
            'date d\'adhésion à parti' => $request->input('date_d_adhésion_à_parti'),
            'Membre actif dans le parti' => $request->input('Membre_actif_dans_le_parti'),
            'La fonction au sein du parti' => $request->input('La_fonction_au_sein_du_parti'),
            'association_id' => 1
        ];

        DB::table('memberScouts')->insert($data);

        return redirect()->route('members_super.list')->with('success', 'Member created successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while creating the member: ' . $e->getMessage()]);
    }
}





    public function show(Request $request ,$id)
    {
        $member = MemberScouts::where('id',$id)->first();
        return view('admins.super_admin.show', compact('member'));
    }

    public function edit($id)
    {
        $member = MemberScouts::findOrFail($id);
        return view('admins.super_admin.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {

          DB::table('memberscouts')->where('id' , $id)->update([
            'Nom complet en arabe' => $request->input('Nom_complet_en_arabe'),
            'Sexe' => $request->input('Sexe'),
            'État civil' => $request->input('État_civil'),
            'Nombre d\'enfants' => $request->input('Nombre_d_enfants'),
            'Date de naissance' => $request->input('Date_de_naissance'),
            'Lieu de naissance' => $request->input('Lieu_de_naissance'),
            'L\'adresse' => $request->input('L_adresse'),
            'La ville' => $request->input('La_ville'),
            'CIN' => $request->input('CIN'),
            'Numéro de téléphone' => $request->input('Numéro_de_téléphone'),
            'Numéro WhatsApp' => $request->input('Numéro_WhatsApp'),
            'Facebook' => $request->input('Facebook'),
            'Email' => $request->input('Email'),
            'Password' => $request->input('Password'),
            'niveau d\'étude' => $request->input('niveau_d_étude'),
            'Spécialisation' => $request->input('Spécialisation'),
            'Niveau de langue arabe' => $request->input('Niveau_de_langue_arabe'),
            'Niveau de langue amazighe' => $request->input('Niveau_de_langue_amazighe'),
            'Niveau de langue française' => $request->input('Niveau_de_langue_française'),
            'Niveau de langue anglais' => $request->input('NLA'),
            'Niveau de langue espagnole' => $request->input('Niveau_de_langue_espagnole'),
            'Autres langues' => $request->input('Autres_langues'),
            'Situation professionnelle' => $request->input('Situation_professionnelle'),
            'Spécialité professionnelle' => $request->input('Spécialité_professionnelle'),
            'Années d\'expérience' => $request->input('Années_d_expérience'),
            'Region' => $request->input('Region'),
            'date d\'adhésion à l\'association' => $request->input('date_d_adhésion_à_l_association'),
            'membre actif Dans l\'association' => $request->membre_actif_dans_l_association,
            'Responsabilité au sein de l\'association' => $request->input('Responsabilité_au_sein_de_l_association'),
            'Formation acquise' => $request->input('Formation_acquise'),
            'fillier' => $request->input('fillier'),
            'Prise de mesure pour les vêtements' => $request->input('Prise_de_mesure_pour_les_vêtements'),
            'L\'appartenance politique' => $request->input('L_appartenance_politique'),
            'date d\'adhésion à parti' => $request->input('date_d_adhésion_à_parti'),
            'Membre actif dans le parti' => $request->input('Membre_actif_dans_le_parti'),
            'La fonction au sein du parti' => $request->input('La_fonction_au_sein_du_parti'),
        ]);
        // return $request;
        return redirect()->route('members_super.list')->with('success', 'Member updated successfully.');
    }
    public function destroy($id)
    {
        MemberScouts::where('id',$id)->delete();

        return redirect()->route('members_super.list')->with('success', 'Member deleted successfully.');
    }
    public function destroyAll()
    {
        DB::table('memberscouts')->delete();

        return redirect()->route('members_super.list')->with('success', 'Member deleted successfully.');
    }

    public function activite()
    {
        $activity = Activity::all();

        return view('admins.super_admin.activity', compact('activity'));
    }
    public function Create_activite()
    {

        return view('admins.super_admin.create_activity');
    }

    public function store_activite(Request $request)
    {
        try {
            $data = [
                'La_branche' => $request->input('La_branche'),
                'Entité' => $request->input('Entité'),
                'Le siège central' => $request->input('Le_siège_central'),
                'type d\'activité' => $request->input('type_d_activité'),
                'date d\'activity' => $request->input('date_d_activity'),
                'Nature de l\'activité' => $request->input('Nature_de_l_activité'),
                'Domaine de l\'activité' => $request->input('Domaine_de_l_activité'),
                'Nombre de bénéficiaires masculins' => $request->input('Nombre_de_bénéficiaires_masculins'),
                'Nombre de bénéficiaires féminins' => $request->input('Nombre_de_bénéficiaires_féminins'),
                'La population cible' => $request->input('La_population_cible'),
                'Lieu de l\'activité' => $request->input('Lieu_de_l_activité'),
                'Durée de l\'activité' => $request->input('Durée_de_l_activité'),
                'Rapport d\'activité' => $request->input('Rapport_d_activité'),
                'Les membres du personnel impliqués dans l\'activité' => $request->input('Les_membres_du_personnel_impliqués_dans_l_activité'),
                'Les frais de l\'activité' => $request->input('Les_frais_de_l_activité'),
                'Les Revenus de l\'activité' => $request->input('Les_Revenus_de_l_activité'),
                'location' => $request->input('location'),
                'association_id' => 1
            ];

            DB::table('activities')->insert($data);

            return redirect()->route('showactivity')->with('success', 'Activity created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while creating the activity: ' . $e->getMessage()]);
        }
    }




}
