<?php

namespace App\Http\Controllers\Admin\Product;
use App\Forms\ProduitForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Produit;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\FormBuilder;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('produit')
               ->join ('categorie','categorie.id','=','produit.categorie_id')
              ->distinct()
               ->select('produit.*','categorie.name')
               ->get();

        return view('Produit.index',[
            'produits' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {

        $form = $formBuilder->create(ProduitForm::class,[
            'method'=>'POST',
            'url'=> route('produit.store')
        ]);
//            dd($form);
        return view('produit.create',[
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
    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->Create(ProduitForm::class);

        if(!$form->isValid())
        {
            return redirect()
                ->back()
                ->WithErrors($form->getErrors())
                ->WithInput();
        }

        $prod = new produit();

        $prod->fill($form->getFieldValues());


        $imageName = $this->generateFileName() . '.' .$request->file('image')->getClientOriginalExtension();


        $prod->fill([
            'image' => $imageName
        ]);

        $request->file('image')->move(
            base_path() . '/public/images/produit/', $imageName
        );


        $prod->save();
        return redirect()->route('produit.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);

        return view('Produit.show',[
            'produit' => $produit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $produit= Produit::find($id);

        if ($produit) {
            $form = $formBuilder ->create(ProduitForm::class,
                [
                    'url'=>route('produit.update',['id' => $id]),
                    'method'=>'PATCH',
                    'model'=>$produit
                ]);
            return view('produit.edit',[
                'form' => $form
            ]);

        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param FormBuilder $formBuilder
     * @return \Illuminate\Http\RedirectResponse
     * @internal param Request $request
     */
    public function update($id, FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(ProduitForm::class);

        if (!$form->isValid())
        {

            return redirect()
                ->back()
                ->WithErrors($form->getErrors())
                ->WithInput();

        }

        /** @var Produit $produit */

        $produit = Produit::find($id);

        $produit->fill($form->getFieldValues());

        $imageName = $this->generateFileName() . '.' .$request->file('image')->getClientOriginalExtension();

        $produit->fill([
            'image' => $imageName
        ]);

        $request->file('image')->move(
            base_path() . '/public/images/produit/', $imageName
        );
        $produit->update();

        return redirect()->route('produit.index')->With('Produit  est modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $produit =Produit::find($id);

        $produit->delete();

        $request->session()->flash('success','le produit est supprimé');
        return redirect()
            ->route('produit.index');
    }

    private function generateFileName() {
        return md5(uniqid());
    }
}
