@extends('layout.menu')
@section('contenu')

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

     {{-- <div class="section-title">
       <h2>Team</h2>
       <h3>Our Hardworking <span>Team</span></h3>
       <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
     </div> --}}

    <div class="row">
        @foreach ($scategories as $scategorie)
       <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

        <div class="member">
           <div class="member-img">
             <img src="{{asset('storage').'/'.$scategorie->photo}}" class="img-fluid" style="width:300px;height:350px;"alt="">
             <div class="social">
                <a href="{{route('cata.produit', $scategorie)}}"><i class="icofont-eye"></i></a>
             </div>
           </div>
           <div class="member-info">
               <span>{{$scategorie->nom}}</span>
               <h4>Lacshion {{$scategorie->categorie->nom}}</h4>
           </div>
         </div>
       </div>
       @endforeach

     </div>
   </div>
 </section>
</section>
@endsection
