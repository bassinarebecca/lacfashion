<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Produit;
use App\SousCategorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $categories=Categorie::all();
        $scategories=SousCategorie::all();
        return view('admin.produit.produit_form', compact('categories', 'scategories'));
    }

    public function getSous_categorie($categorie=0){
        //rafraichir les sous categorie avec ajax en fonction du pays selectionné selectionnée
        $empData['data'] = SousCategorie::select('id','nom')->where('categorie_id', $categorie)->get();
        return response()->json($empData);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nom'=> ['required','string'],
            'prix'=> ['required','numeric'],
            'stock'=> ['required','integer'],
            'categorie_id'=> ['required','integer'],
            'sous_categorie_id'=> ['required','integer'],
            'photo'=> ['required','image'],
          ]);
          $imagePath=request('photo')->store('uploads','public');
        Produit::create([
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'stock'=>$request->stock,
            'categorie_id'=>$request->categorie_id,
            'sous_categorie_id'=>$request->sous_categorie_id,
            'photo'=>$imagePath,
        ]);
        return redirect()->back();
    }

    public function liste(){
        $produits=Produit::all();
        return view('admin.produit.produit_liste',compact('produits'));
    }
    public function delete_produit(Produit $produit){
        $produit->delete();
        return redirect()->back();
    }
    public function edit_produit(Produit $produit){
        return view('admin.produit.produit_edit', compact('produit'));
    }

    public function update_produit(Request $request, Produit $produit)
    {
        $data=request()->validate([
            'nom'=> ['required','string'],
            'photo'=> ['image'],
          ]);
        if(request('photo')){
            $imagePath=request('photo')->store('uploads','public');
            $produit->update(array_merge($data,['photo'=>$imagePath]));
          }
          else{
            $produit->nom=$request->nom;
            $produit->save();
          }
          return redirect()->route('produit.list',$produit);
    }
    public function detailProduit(Produit $produit)
    {
         return view('client.detailProduit',compact('produit'));
    }

    public function show($id)
    {
        $produit = Produit::find($id);
        $categories=Categorie::all();
        return view('client.detailProduit',compact('produit','categories'));
        //return view('products.show')->with('product', $product);
    }
}
