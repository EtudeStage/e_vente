<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class modepayementForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('libe', Field::TEXTE, [
                'rules' => 'required|min:5'
            ])

            ->add('payement_id', Field::number, [
                'rules' => 'required|min:1'
            ]);
    }
}
