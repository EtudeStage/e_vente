<?php

namespace App\Http\Controllers\Cart;

use App\AddToCartForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\produit;
use Kris\LaravelFormBuilder\Facades\FormBuilder;


class CartController extends Controller

{

    /**
     * @param FormBuilder $formBuilder
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(FormBuilder $formBuilder)

    {

        $cart = [
            'items' => cart()->items($displayCurrency = true),
            'totals' => cart()->totals(),
        ];

        $items = $cart['items'];
        $count = 0;


        foreach ($items as $item){

            if (isset($item['quantity'])) {
                $count += $item['quantity'];
            }
        }


//        dd(array_sum(array_column(cart()->items(), 'quantity')));

        return view('Cart.index',[
            'items' => cart()->items($displayCurrency = false),
            'totals' => cart()->totals(),
            'count' => $count
        ]);


    }
    /**
     * Add to cart
     *
     * @param Request $request
     * @return array
     */
    public function addToCart(Request $request)
    {

        if ($request->has('id')) {

            $id = $request->get('id');

            if ($this->productExist($id)) {

                produit::addToCart($id);
            }
        }

        return redirect()->route('homepage');
    }



    /**
     * Remove from cart
     *
     * @return array
     */
    public function removeFromCart()
    {

        cart()->removeAt(request('id'));

        return redirect()->route('cart');
    }
    /**
     * Increment cart item quantity
     *
     * @return array
     */
    public function incrementCartItem()
    {
        cart()->incrementQuantityAt(request('id'));


        return redirect()->route('cart');;
    }
    /**
     * Decrement cart item quantity
     *
     * @return array
     */
    public function decrementCartItem()
    {
        cart()->decrementQuantityAt(request('id'));

        return redirect()->route('cart');
    }
    /**
     * Applies the discount to the cart
     *
     * @return array
     */
    public function applyDiscount()
    {
        if (request('discountType') == 1) {
            cart()->applyDiscount($percentage = request('red'));
            return $this->getCartDetails();
        }
        cart()->applyFlatDiscount($amount = request('discountInput'));

        return redirect()->route('cart');
    }

    /**
     * Cart details
     *
     * @return array
     */
    protected function getCartDetails()
    {
        return [
            'items' => cart()->items($displayCurrency = true),
            'totals' => cart()->totals(),
        ];

    }


    private function productExist($id){

        return produit::find($id);
    }

    /**
     * Clear Cart
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clearCart()
    {
        cart()->clear();
        return redirect()->route('cart')->with('status', 'panier vidé!'); ;
    }



}
