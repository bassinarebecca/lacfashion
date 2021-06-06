<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $fillable = [
        'categorie_id','nom', 'photo'
    ];
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function produits()
    {
        return $this->hasMany('App\Produit');
    }
}
