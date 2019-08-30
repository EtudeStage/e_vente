<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Freshbitsweb\LaravelCartManager\Traits\Cartable;


class produit extends Model
{

    use Cartable;

    protected $table ="produit";

    protected $fillable= ['nom','prix','qts','image','categorie_id'];

    public function getName() {
        return $this->getAttributeValue('nom');
    }

    public function getPrice() {
        return $this->getAttributeValue('prix');
    }

    public function getqts() {
        return $this->getAttributeValue('qts');
    }

    /**
     *
     */
    public  function categorie(){
        return $this->belongsTo('App\Model\Categorie');
    }
}
