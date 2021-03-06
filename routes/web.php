<?php

use App\Http\Controllers\CartController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', 'AccueilController@index')->name('accueil');

Route::get('/apropos', 'AccueilController@apropos')->name('apropos');
Route::get('/contact', 'AccueilController@contact')->name('contact');

Route::get('/produit', 'AccueilController@produit')->name('produit');
//catalogue
Route::get('catalogue/{categorie}', 'AccueilController@cata_scategorie')->name('cata.scategorie');
Route::get('catalogue-produit/{scategorie}', 'AccueilController@cata_produit')->name('cata.produit');



// route d'authentification
Route::get('/admin', 'AdminController@dash')->name('dasboard');

//route pour caegories
Route::get('/categorie_form', 'CategorieController@create_categorie')->name('categorie.create');

Route::post('/categorie_store', 'CategorieController@store_categorie')->name('categorie.store');

Route::get('/categorie_list', 'CategorieController@list_categorie')->name('categorie.list');

Route::delete('/categorie_supp/{categorie}', 'CategorieController@delete_categorie')->name('categorie.delete');

Route::get('/categorie_edit/{categorie}', 'CategorieController@edit_categorie')->name('categorie.edit');

Route::patch('/categorie_modif/{categorie}', 'CategorieController@update_categorie')->name('categorie.update');

Route::get('/categorie_show/{categorie}', 'CategorieController@detail_categorie')->name('categorie.show');

// routes sous categorie
Route::get('/sous-categorie_form', 'CategorieController@create_souscategorie')->name('souscategorie.create');
Route::post('/sous-categorie_store', 'CategorieController@store_souscategorie')->name('souscategorie.store');
//Route::patch('/scategorie_modif/{sous-categorie}', 'CategorieController@update_scategorie')->name('scategorie.update');
Route::get('/sous-categorie_list', 'CategorieController@list_souscategorie')->name('sous-categorie.list');
Route::patch('/scategorie_modif/{categorie}', 'CategorieController@update_scategorie')->name('scategorie.update');



// routes produits
Route::get('/produit_form', 'ProduitController@create')->name('produit.create');
Route::get('/getSous_categorie/{id}', 'ProduitController@getSous_categorie');
Route::post('/produit_store', 'ProduitController@store')->name('produit.store');
Route::get('/produit_liste', 'ProduitController@liste')->name('produit.liste');
Route::delete('/produit_supp/{produit}', 'ProduitController@delete_produit')->name('produit.delete');
Route::get('/produit_edit/{produit}', 'ProduitController@edit_produit')->name('produit.edit');
Route::patch('/produit_modif/{produit}', 'ProduitController@update_produit')->name('produit.update');
 Route::get('/produit_show/{produit}', 'ProduitController@detail_produit')->name('produit.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

// route burkina
Route::get('pays/{categorie}', 'AccueilController@categorie_produit')->name('categorie.produit');
// Route::get('/ajoutPanier/{slug}', 'AccueilController@show')->name('produit.show');
// route cart
Route::post('panier/ajouter','CartController@Store')->name('cart.store');

// detail client
Route::get('/detailProduit/{produit}', 'ProduitController@show')->name('client.detailProduit');
Route::get('/panier/add', 'CartController@add')->name('cart_add');
Route::get('/panier', 'CartController@ajout')->name('cart_panier');
//newsletter
Route::get('/layout_create}', 'NewsletterController@create')->name('menu');;
Route::post('/menu_store', 'NewsletterController@store')->name('test');




