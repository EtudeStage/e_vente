<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
   protected $fillable = ['produit_id', 'commande_id','qts'];

   protected $table = "lignecommande";
}
