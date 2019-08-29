<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class produitfourniseurForm extends Form
{
    public function buildForm()
    {
      $this
        ->add('produit_id', Field::NUMBER, [
        'rules' => 'required|min:1'
    ])


        ->add('forniseur_id', Field::NUMBER, [
        'rules' => 'required|min:1'
    ]);

    }
}
