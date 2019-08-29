<?php

namespace App\Http\Controllers\Admin\Typeproduit;

use App\Forms\typeproduitForm;
use App\typeproduit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class Typeproduitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Typeproduit::all();
        return view('categorie.index',[
            'categorie' => $categorie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TypeproduitForm::class,[
            'method'=>'POST',
            'url'=> route('categorie.store')
        ]);

        return view('categorie.create',[
            'form'=>$form
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FormBuilder $formBuilder
     * @return \Illuminate\Http\RedirectResponse
     * @internal param Request $request
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TypeproduitForm::class);

        if(!$form->isValid())
        {
            return redirect()
                ->back()
                ->WithErrors($form->getErrors())
                ->WithInput();
        }
        $cat =new Typeproduit;

        $cat->fill($form->getFieldValues());

        $cat->save();

        return redirect()->route('categorie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Typeproduit::find($id);

        return view('categorie.show',[
            'categorie' => $categorie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $Typeproduit= Typeproduit::find($id);

        if ($Typeproduit) {
            $form = $formBuilder ->create(TypeproduitForm::class,
                [
                    'url'=>route('categorie.update',['id' => $id]),
                    'method'=>'PATCH',
                    'model'=>$Typeproduit
                ]);


            return view('categorie.edit',[
                'form' => $form
            ]);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TypeproduitForm::class);

        if (!$form->isValid())
        {

            return redirect()
                ->back()
                ->WithErrors($form->getErrors())
                ->WithInput();

        }
        /** @var Typeproduit $Typeproduit */

        $categorie = Typeproduit::find($id);
        $categorie->update($form->getFieldValues());
        return redirect()->route('categorie.index')->With('Categorie modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        /** @var Typeproduit $type */

        $type = Typeproduit::find($id);

        $type->delete();

        $request->session()->flash('success','le categorie est supprimé');
        return redirect()
            ->route('categorie.index');
    }
}
