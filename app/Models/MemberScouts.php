<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberScouts extends Model
{
    protected $table = 'MemberScouts'; // Specify the table name

    protected $fillable = [
        'Nom complet en arabe', 'Sexe', 'État civil', 'Nombre d\'enfants', 'Date de naissance',
        'Lieu de naissance', 'L\'adresse', 'La ville', 'CIN', 'Numéro de téléphone', 'Numéro WhatsApp',
        'Facebook', 'Email', 'Password', 'niveau d\'étude', 'Spécialisation', 'Niveau de langue arabe',
        'Niveau de langue amazighe', 'Niveau de langue française', 'niveau de langue anglais',
        'Niveau de langue espagnole', 'Autres langues', 'Situation professionnelle', 'Spécialité professionnelle',
        'Années d\'expérience', 'Region', 'date d\'adhésion à l\'association', 'membre actif Dans l\'association',
        'Responsabilité au sein de l\'association', 'Formation acquise', 'Prise de mesure pour les vêtements',
        'L\'appartenance politique', 'date d\'adhésion à parti', 'Membre actif dans le parti',
        'La fonction au sein du parti', 'association_id'
    ];

    public function association()
    {
        return $this->belongsTo(ScoutAssociation::class);
    }
}
