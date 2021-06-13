<?php

namespace App\Http\Controllers;
use Newsletter ;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create(){
        return view('layout.menu');
         }

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|string',
     ]);

    if ( !Newsletter::isSubscribed($request->email) ) {
        Newsletter::subscribePending($request->email);
        return redirect('/')->with('success', 'Vous avez souscrire avec succes à notre news letter!');
     }
        return redirect('/')->with('failure', 'Vous avez souscrire avec succes à notre news letter!');

}

}
