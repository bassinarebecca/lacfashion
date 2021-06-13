<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\SousCategorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create_categorie(){
        return view('admin.categories.categorie_form');
    }

    public function list_categorie(){
        $categories=Categorie::all();
        return view('admin.categories.categorie_liste',compact('categories'));
    }

    public function store_categorie(Request $request)
    {
        request()->validate([
            'nom'=> ['required','string'],
            'photo'=> ['required','image'],
          ]);
          $imagePath=request('photo')->store('uploads','public');
        Categorie::create([
            'nom'=>$request->nom,
            'photo'=>$imagePath,
        ]);
        return redirect()->back();
    }

    public function delete_categorie(Categorie $categorie){
        $categorie->delete();
        return redirect()->back();
    }

    public function edit_categorie(Categorie $categorie){
        return view('admin.categories.categorie_edit', compact('categorie'));
    }

    public function update_categorie(Request $request, Categorie $categorie)
    {
        $data=request()->validate([
            'nom'=> ['required','string'],
            'photo'=> ['image'],
          ]);
        if(request('photo')){
            $imagePath=request('photo')->store('uploads','public');
            $categorie->update(array_merge($data,['photo'=>$imagePath]));
          }
          else{
            $categorie->nom=$request->nom;
            $categorie->save();
          }
          return redirect()->route('categorie.list',$categorie);
    }

    public function detail_categorie($categorie)
    {
        $categories=SousCategorie::where('categorie_id', '=', $categorie)->get();
        return view('admin.sous-categorie.sous-categorie_liste',compact('categories'));
    }
    // sous-contoller

    public function create_souscategorie(){
        $categories=Categorie::all();
        return view('admin.sous-categorie.sous-categorie_form', compact('categories'));
    }

    public function store_souscategorie(Request $request)
    {
        request()->validate([
            'categorie_id'=> ['required','integer'],
            'nom'=> ['required','string'],
            'photo'=> ['required','image'],
          ]);
          $imagePath=request('photo')->store('uploads','public');
        SousCategorie::create([
            'categorie_id'=>$request->categorie_id,
            'nom'=>$request->nom,
            'photo'=>$imagePath,
        ]);
        return redirect()->back();
    }

    public function update_scategorie(Request $request, Categorie $categorie)
    {
        $data=request()->validate([
            'nom'=> ['required','string'],
            'photo'=> ['image'],
          ]);
        if(request('photo')){
            $imagePath=request('photo')->store('uploads','public');
            $categorie->update(array_merge($data,['photo'=>$imagePath]));
          }
          else{
            $categorie->nom=$request->nom;
            $categorie->save();
          }
          return redirect()->route('sous-categorie.liste',$categorie);
    }


}
