<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $table = 'emplois';
    public $timestamps = false;


    protected $fillable = [
        'titre',
        'entreprise',
        'ville',
        'pays',
        'categorie',
        'type_contrat',
        'salaire',
        'description',
        'niveau_etudes',
        'competence',
        'site',
        'email',
        'aentreprise',
        'nentreprise'
    ];
    
    public function postulants()
    {
        return $this->belongsToMany(User::class, 'postulations')->withTimestamps();
    }
    
    public function getNombrePostulantsAttribute()
{
    return $this->attributes['nombre_postulants'];
}
}
