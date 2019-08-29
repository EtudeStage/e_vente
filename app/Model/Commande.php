<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   protected $table = "commande";

   protected $fillable = ['users_id', 'taxe', 'prix_total'];
}
