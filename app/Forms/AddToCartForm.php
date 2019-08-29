<?php

namespace App;

use Kris\LaravelFormBuilder\Fields\InputType;
use Kris\LaravelFormBuilder\Form;

class AddToCartForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('id', InputType::class, [
                'attr'=>[
                    'class'=>'btn btn-primary col-lg-4',
                    'hidden' => 'true'
                ]
            ])
            ->add('submit', 'submit', [
                    'attr'=>[
                        'class'=>'btn btn-primary col-lg-4']
            ]);
    }
}
