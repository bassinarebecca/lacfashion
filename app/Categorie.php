<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom', 'photo'
    ];

    public function produits()
{
    return $this->hasMany('App\Produit');
}


    public function scategories()
{
    return $this->hasMany('App\SousCategorie');
}
}

