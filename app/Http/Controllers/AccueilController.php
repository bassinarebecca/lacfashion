<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use App\SousCategorie;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
         $categories=Categorie::all();
         $scategories=SousCategorie::all();
        return view('client.accueil', compact('categories', 'scategories'));
    }


    public function apropos()
    {
        $categories=Categorie::all();
        $scategories=SousCategorie::all();
        return view('apropos',compact('categories'));
    }
    public function contact()
    {
        $categories=Categorie::all();
        $scategories=SousCategorie::all();
        return view('contact',compact('categories'));
    }

    public function categorie_produit($categorie){
        $categories=Categorie::all();
        $produits=Produit::where('categorie_id', '=', $categorie)->get();
        return view('client.pays', compact('produits', 'categories'));
    }
    // public function show($slug)
    // {
    //     $product = Produit::where('slug', $slug)->firstOrFail();

    //     return view('products.show')->with('product', $product);
    // }

    public function produit(){
        $produits=Produit::all();
        $categories=Categorie::all();
        return view('client.produit', compact('produits', 'categories'));
    }

    public function cata_scategorie($categorie){
        $categories=Categorie::all();
        $scategories=SousCategorie::where('categorie_id', '=', $categorie)->get();
        return view('client.catalogue', compact('categories', 'scategories'));
    }
    public function cata_produit($scategorie){
        $categories=Categorie::all();
        $produits=Produit::where('sous_categorie_id', '=', $scategorie)->get();
        return view('client.cata_produit', compact('categories', 'produits'));
    }

    //detail
    // public function detail()
    // {
    //     $products = Product::whereActive(true)->get();
    //     $produits=Produit::where('sous_categorie_id', '=', $products)->get();

    //     return view('home', compact('products'));
    // }

}
