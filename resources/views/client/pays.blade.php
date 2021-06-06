@extends('layout.menu')
@section('contenu')
<section id="hero2" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">

    </div>
  </section><!-- End Hero -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 class="text-dark">Bienvenue dans votre magasin la nouvelle magasin mixte</h2>
      </div>
        <div class="row d-flex d-flex justify-content-between " data-aos="fade-up" data-aos-delay="100">
           @foreach ($produits as $produit)
           <div>
                <img src="{{asset('storage').'/'.$produit->photo}} " class="img-fluid" alt="" style="width:300px;height:300px;" class="bf5 border rounded-circle"> <br>
                    <div class="d-flex justify-content-between">
                        <h4 class="text-center  "> <a class="btn btn-primary " href=""> <i class="fas fa-cart-plus"></i>  </a> </h4>
                        <td class=" font-weight-bold">@if($produit->stock >0) <span class="text-success ">en stock </span> ({{$produit->stock}})  @else <span class="text-danger"> en rupture </span>  @endif  </td>

                        <h6 class="text-center btn  text-danger ">{{number_format($produit->prix, 2, ',', ' ') }} f CFA </h6>
                    </div>
                    <h6 class="text-center mt-1">  {{$produit->nom}}</h6>
            </div>
            @endforeach
        </div>

        </div>
      </div>
    </div>
  </section>
  <section id="clients" class="clients section-bg">

  </section>
@endsection
