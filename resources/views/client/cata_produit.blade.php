@extends('layout.menu')
@section('contenu')

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

     <div class="section-title">
       <h2>nous</h2>
       <h3> Pagne authentique d'Afrique<span> Pagne tissé</span></h3>
       <p>Pagne authentique d'Afrique, africainement beau africainement belle! Pagne authentique d'Afrique c'est la qualité supérieure. Tenue prêt à porté pour hommes, femmes, mariages(couple), enfants. Faites vos choix avec nos différents modèles</p>
     </div>

    <div class="row">
        @foreach ($produits as $produit)
       <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

        <div class="member">
           <div class="member-img">
             <img src="{{asset('storage').'/'.$produit->photo}}" class="img-fluid" style="width:300px;height:350px;"alt="">
             <div class="social">
                <a href="{{ route('client.detailProduit', $produit->id) }}"><i class="icofont-eye"></i></a>
                <a href=""><i class="fas fa-cart-plus"></i></a>
             </div>
           </div>
           <div class="member-info">
               <span>{{$produit->nom}}</span>
               <h4>Lacshion {{$produit->categorie->nom}}</h4>
           </div>
         </div>
       </div>
       @endforeach

     </div>
   </div>
 </section>
</section>
@endsection
