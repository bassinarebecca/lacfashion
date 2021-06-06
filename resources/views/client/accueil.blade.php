@extends('layout.menu')
@section('contenu')
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenue <span>Lac</span>Fashion
      </h1>
      <h2 class="bleu"><span>Le pagne trationnel au plaisir de la jeunesse africaine</span></h2>
      <div class="d-flex">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 class="text-dark">Bienvenue dans votre magasin la nouvelle magasin mixte</h2>
      </div>
        <div class="row d-flex d-flex justify-content-between " data-aos="fade-up" data-aos-delay="100">
           {{-- @foreach ($categories as $categorie)
           <div>
                <img src="{{asset('storage').'/'.$categorie->photo}}" class="img-fluide" alt="" style="width:300px;height:300px;" class="bf5 border rounded-circle"> <br>
                <h4 class="text-center mt-1"><a class="btn btn-primary " href="{{route('categorie.produit',$categorie->id)}}">{{$categorie->nom}}</a> </h4>
            </div>
           @endforeach --}}

           @foreach ($categories as $categorie)
           <div class="card" style="width: 18rem;">
            <img class="card-img-top img-fluid" src="{{asset('storage').'/'.$categorie->photo}}" style="width:300px;height:350px;" alt="Card image cap">

            <div class="card-body">
                <h4 class="text-center mt-1"><a class="btn btn-primary " href="{{route('categorie.produit',$categorie->id)}}">{{$categorie->nom}}</a> </h4>
            </div>
          </div>
           @endforeach

        </div>
 
        </div>
      </div>
    </div>
  </section>
  <section id="clients" class="clients section-bg">
    <div class="container" data-aos="zoom-in">
        <div class="section-title">
            <h2>Nos partenaires</h2>
          </div>
      <div class="row d-flex  justify-content-center">
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
