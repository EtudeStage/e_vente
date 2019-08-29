<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class type_clientForm extends Form
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

            ->add('datenaiss', Field::DATE, [
                'rules' => 'required|min:10'
            ])

            ->add('lieunaiss', Field::TEXT, [
                'rules' => 'required|min:3'
            ])
            ->add('nationnalite', Field::TEXT, [
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
