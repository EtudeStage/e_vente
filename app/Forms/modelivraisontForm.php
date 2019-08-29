<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class modelivraisontForm extends Form
{
    public function buildForm()
    {
       $this
           ->add('nom', Field::TEXT, [
               'rules' => 'required|min:3'
           ])
           ->add('nom', Field::TEXT, [
               'rules' => 'required|min:3'
           ])
           ->add('nom', Field::TEXT, [
               'rules' => 'required|min:3'
           ]);
    }
}
