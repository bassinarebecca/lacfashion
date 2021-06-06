@extends('layout.menu')
@section('contenu')

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

     <div class="section-title">
       <h2>Team</h2>
       <h3>Our Hardworking <span>Team</span></h3>
       <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
     </div>

    <div class="row">
        @foreach ($produits as $produit)
       <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

        <div class="member">
           <div class="member-img">
             <img src="{{asset('storage').'/'.$produit->photo}}" class="img-fluid" style="width:300px;height:350px;"alt="">
             <div class="social">
                <a href=""><i class="icofont-eye"></i></a>
                <a href=""><i class="fas fa-cart-plus"></i></a>
             </div>
           </div>
           <div class="member-info">
             <h4>Lacshion</h4>
             <span>{{$produit->nom}}</span>
           </div>
         </div>
       </div>
       <a href="{{ route('client.detailProduit', $produit->id) }}">

       @endforeach

     </div>
   </div>
 </section>
</section>
@endsection
