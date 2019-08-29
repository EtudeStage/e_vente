<?php

namespace App\Http\Controllers\Command;

use App\Commande;
use App\Model\LigneCommande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\FormBuilder;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = DB::table('lignecommande')
            ->join('commande', 'commande.id', '=', 'lignecommande.commande_id')
            ->join('etat_commande', 'etat_commande.id', '=', 'commande.etat_commande_id')
            ->select(
                'lignecommande.commande_id',
                DB::raw('SUM(qts) as nbre'),
                'commande.prix_total',
                'commande.taxe',
                'etat_commande.libelle'
            )
            ->where('commande.users_id', '=', Auth::id())
            ->groupBy('commande_id')
            ->get();


        return view('commande.index',[
          'commandes' => $commandes,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = cart()->toArray();

        if (isset($cart['total']) && $cart['total'] > 0) {

            $commande = new Commande();


            $commande->fill([
                'users_id' => Auth::id(),
                'taxe' => $cart['tax'],
                'prix_total' => $cart['total']
            ]);

            $commande->save();

            $idCommandes = $commande->getAttribute('id');


            $items = $cart['items'];


            foreach ($items as $item) {

                $line = new LigneCommande();

                $line->fill([
                    'produit_id' => $item['modelId'],
                    'commande_id' => $idCommand,
                    'qts' => $item['quantity'],
                ]);

                $line->save();
            }


            cart()->clear();

            return view('Commande.show',[
                'commande' => $commande
            ]);

        }


        return view('Commande.show');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commande = commande::find($id);

        return view('commande.show',[
            'commande' => $commande
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $commande=commande::find($id);

        $commande->delete();

        $request->session()->flash('success','le commande est supprimé');
        return redirect()
            ->route('Commande.index');
    }

    private function generateFileName() {
        return md5(uniqid());
    }
}
