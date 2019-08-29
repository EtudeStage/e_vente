<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class typeproduitForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'rules' => 'required|min:3'

            ])

            ->add('submit', 'submit', [
                'label' =>'valider',
                'attr'=>[
                    'class'=>'btn btn-primary col-lg-4']
            ])


            ->add('clear', 'reset', [
                'label' =>'Annuler',
                'attr'=>[
                    'class'=>'btn btn-primary col-lg-4']


        ]);

    }
}
