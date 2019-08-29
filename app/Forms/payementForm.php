<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class payementForm extends Form
{
    public function buildForm()
    {
        $this
                ->add('montant', Field::NOMBER, [
                     'rules' => 'required|min:3'
                  ])

                     ->add('date', Field::date, [
                         'rules' => 'required|min:10'
                     ]);
    }
}
