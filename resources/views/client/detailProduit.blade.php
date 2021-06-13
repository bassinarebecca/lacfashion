@extends('layout.menu')
@section('contenu')
 <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
         {{-- <div class="container-fluid">
            <div class="card-body">
                <section class="">
                    <div class="container" data-aos="fade-up">
                            <div class="section-title">
                                <h2> {{$produit->nom}}</h2>
                              </div>
                            <div class="container ">
                                <div class="row">

                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                          <div class="col-md-4">
                                            <img style="height:262.5px;" src="{{asset('storage').'/'.$produit->photo}}" class="w-100 ">
                                          </div>
                                          <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="list-item text-bold"><span class="card-text" >nom:</span><span > {{$produit->titre}} </div><br>
                                                    <div class="list-item text-bold"><span class="card-text">Description: </span> {{$produit->description }}  </div><br>
                                                    <div class="list-item text-bold"><span class="card-text">Date de creation: </span> {{$produit->created_at}} </div><br>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <p>
                                        <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                    </p>
                                </div>
                            </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div> --}}

    <main role="main">


        <div class="container">


            <div class="row justify-content-between">

                <div class="col-6">
                    {{-- <div class="col-md-4">
                        <img style="width:1200px;height:300px;" src="{{asset('storage').'/'.$produit->photo}}" class="w-100 ">
                      </div> --}}

                      <div class="card mb-4 box-shadow">
                        <img style="width:500px;height:500px;" src="{{asset('storage').'/'.$produit->photo}}" class="card-img-top img-fluid" alt="Responsive image">
                    </div>
                </div>

                <div class="col-6">

                    <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
                    <h5>{{$produit->prix}}</h5>
                    <p class="lead text-muted">Cinoque aime choco! consectetur adipisicing elit. Dignissimos dolore eaque earum eos ex, exercitationem facilis magni maiores maxime natus neque odit quo quod recusandae tempora unde ut veritatis vero!</p>
                    <hr>
                    <form action="" id="panier_add">
                    <label for="size">Choisissez votre taille</label>
                    <select name="size" id="size" class="form-control">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                </form>
                    <button type="submit" id="panier_add" class="btn btn-btn btn-primary my-2 btn-block"><i class="fas fa-shopping-cart"></i>

                    </button>


                </div>
            </div>
        </div>


    {{-- <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <h3>Vous aimerez aussi :</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="produits/hulk.jpg" class="card-img-top img-fluid" alt="Responsive image">

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="produits/krusty_simpsons.jpg" class="card-img-top img-fluid" alt="Responsive image">

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="produits/star_trek_kirk.jpg" class="card-img-top img-fluid" alt="Responsive image">

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}

</main>
@endsection
</div>
</div>
</div>
