<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class produitcommandeForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nbproduit', Field::NUMBER, [
                'rules' => 'required|min:2'
            ])

                 ->add('produit_id', Field::NUMBER, [
                     'rules' => 'required|min:1'
                 ])

                ->add('commande_id', Field::NUMBER, [
               'rules' => 'required|min:1'
           ]);

    }
}
