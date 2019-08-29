<?php
//jiv est bien présent bla bla
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Produit\ProduitController@index')->name('homepage');


/**
 * Cart
 */
Route::post('/cart/add', 'Cart\CartController@addToCart')->name('addToCart');
Route::post('/cart/remove', 'Cart\CartController@removeFromCart')->name('cart-remove');
Route::post('/cart/inc', 'Cart\CartController@incrementCartItem')->name('cart-inc');
Route::post('/cart/dec', 'Cart\CartController@decrementCartItem')->name('cart-dec');
Route::post('/cart/clear', 'Cart\CartController@clearCart')->name('cart-clear');
Route::get('/cart/', 'Cart\CartController@index')->name('cart');

Route::get('/bj',function () {
    return view('admin\bj');
});

Route::get('/fournisseur',function () {
    return view('admin\fournisseur');
});

Route::get('/bj',function () {
    return view('admin\bj');
});

Route::get('/admin', function () {
    return view('admin','admin');
});

Auth::routes();

Route::get('/commande',function () {
    return view('\commande');
});


Route::get('/magasin',function () {
    return view('magasin');
});

Route::get('/contact',function () {
    return view('contact');
});

Route::resource('commande', 'Command\CommandController')->middleware('auth');

route::resource('detaille', 'Detaille\detaillecontroller');

Route::prefix('admin')->group(function () {

    route::resource('produit', 'Admin\Product\ProductController');
    route::resource('categorie', 'Admin\Typeproduit\TypeproduitController');


//    route::resource('type_client', 'Client\typeclientcontroller');
//
//
//    route::resource('fourniseur', 'Fourniseur\FourniseurController');
//
//    route::resource('promotion', 'Promotion\Promotioncontroller');
//
//    route::resource('payemment', 'Payemment\Payementcontroller');
//
//    route::resource('modepayemment', 'Modepayement/Modepayement controller');
//
//    route::resource('livraison', 'Livraison\Livaisoncontroller');
//
//    route::resource('modelivraison', 'Modelivraison/Modelivaisoncontroller');
//
//    route::resource('typeproduit', 'Typeproduit\Typeproduitcontroller');
//
//    route::resource('produitcommande', 'Produitcommande/Produitcommandecontroller');
//
//    route::resource('produitpromotion', 'Produitpromotion/Produitpromotioncontroller');
//
//    route::resource('produitfourniseur', 'Produitfourniseur/Produitfourniseurcontroller');
//
//    route::resource('commande', 'Commande/Commandecontroller');
});