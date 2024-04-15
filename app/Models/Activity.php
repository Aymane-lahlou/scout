<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'La_branche', 'Entité', 'Le siège central', 'type d\'activité', 'date d\'activity',
        'Nature de l\'activité', 'Domaine de l\'activité', 'Nombre de bénéficiaires masculins',
        'Nombre de bénéficiaires féminins', 'La population cible', 'Lieu de l\'activité', 'Durée de l\'activité',
        'Rapport d\'activité', 'Les membres du personnel impliqués dans l\'activité',
        'Les frais de l\'activité', 'Les Revenus de l\'activité', 'location', 'association_id'
    ];

    public function association()
    {
        return $this->belongsTo(ScoutAssociation::class);
    }
}
