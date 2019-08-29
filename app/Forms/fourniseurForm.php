<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class fourniseurForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nom', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('prenom', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('sexe', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('age', Field::NUMBER, [
                'rules' => 'required|min:3'
            ])

            ->add('adresse', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('tel', Field::NUMBER, [
                'rules' => 'required|min:2'
            ])


            ->add('email', Field::TEXT, [
                'rules' => 'required|min:10'
            ]);
    }
}
