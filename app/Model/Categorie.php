<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function produits(){
        return $this->hasMany('APP\Mode\produit');
    }
}
