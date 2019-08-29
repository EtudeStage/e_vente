<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class commandeForm extends Form
{
    public function buildForm()
    {
        $this
             ->add('date', Field::NUMBER, [
                'rules' => 'required|min:3'
            ])

        ->add('prix', Field::NUMBER, [
            'rules' => 'required|min:5'
        ])

        ->add('modepayemment', Field::TEXT, [
            'rules' => 'required|min:2'
        ])

        ->add('prixtransport', Field::NUMBER, [
            'rules' => 'required|min:2'
        ])

        ->add('prixtotal', Field::NUMBER, [
            'rules' => 'required|min:2'
        ]);
    }
}
