<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class produitpromotionForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('produit_id', Field::NUMBER, [
                'rules' => 'required|min:1'
            ])


            ->add('promotion_id', Field::NUMBER, [
                'rules' => 'required|min:1'
            ]);



    }
}
