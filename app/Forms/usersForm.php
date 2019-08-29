<?php

namespace App;

use Kris\LaravelFormBuilder\Form;

class usersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('prenom', Field::TEXT, [
                'rules' => 'required|min:5'
            ])

            ->add('email', Field::TEXT, [
                'rules' => 'required|min:2'
            ])

            ->add('password', Field::NUMBER, [
                'rules' => 'required|min:2'

            ]);
    }
}
