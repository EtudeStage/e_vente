<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeproduit extends Model
{
    protected $table = "categorie";


    protected $fillable= ['name'];
}
