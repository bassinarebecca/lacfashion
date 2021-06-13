<?php

namespace App\Http\Controllers;

use App\Produit;
use App\User;
use Gloudemans\Shoppingcart\Cart;
use Darryldecode\Cart\Cart as CartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function store(Request $request){
      Cart::add($request->id, $request->photo, $request->nom, 1, $request->prix)
      ->associate('App\Produit');
   }
   public function add(Request $request){
       $produit=Produit::find($request->id)
    Cart::add(array(
        'id' => $produit->id, // inique row ID
        'name' => $produit->nom,
        'price' => $produit->prix,
        'quantity' => 1,
        'attributes' => array()
    ));
    return redirect(route('cart_panier'));
   }

public function ajout(){
    $content = Cart::getContent();
    dd($content);
}
}
