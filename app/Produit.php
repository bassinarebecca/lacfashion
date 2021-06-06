<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom', 'photo', 'prix', 'stock', 'categorie_id', 'sous_categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
    public function souscategorie()
    {
        return $this->belongsTo('App\SousCategorie');
    }
}
