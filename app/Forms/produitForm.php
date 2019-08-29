<?php

namespace App\Forms;

use App\Model\Categorie;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Form;

use Kris\LaravelFormBuilder\Field;

class produitForm extends Form
{
    public function buildForm()
    {
        $this

            ->add('nom', Field::TEXT, [
                'rules' => 'required|min:3'
            ])

            ->add('categorie_id', 'select', [
                'choices' => $this->getValues(),
                'rules' => 'required',
                'empty_value' => '=== Selectionnez la categorie ===',
                'label' => 'Categorie'
            ])

            ->add('image', Field::FILE, [
                'rules' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ])

            ->add('qts', Field::NUMBER, [
                'rules' => 'required|min:1',
                'label' => 'Quantité'
            ])

            ->add('prix', Field::NUMBER, [
                'rules' => 'required|min:2'
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

    public function getValues() {

        return DB::table('categorie')
            ->pluck('name', 'id')
            ->toArray();

    }
}
