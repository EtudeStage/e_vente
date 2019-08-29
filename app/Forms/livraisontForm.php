<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class livraisontForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('date', Field::DATE, [
                'rules' => 'required|min:10'
            ])

            ->add('lieu', Field::TEXT, [
                'rules' => 'required|min:3'
            ]);
    }
}
