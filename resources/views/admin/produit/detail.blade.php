@extends('layout.dashboard')
@section('contenu')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
        <div class="container-fluid">
            <div class="card-body">
                <section class="">
                    <div class="container" data-aos="fade-up">
                            <div class="section-title">
                                <h2> {{$produit->nom}}</h2>
                              </div>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-5">
                                        <img style="height:262.5px;" src="{{asset('storage').'/'.$produit->photo}}" class="w-100 ">
                                    </div>
                                        <div class="col-7 ">
                                            <div class="list-group mt-1">
                                                <div class="list-item text-bold"><span class="text-info" >nom:</span><span > {{$produit->titre}} </div><br>
                                                <div class="list-item text-bold"><span class="text-info">Description: </span> {{$produit->description }}  </div><br>
                                                <div class="list-item text-bold"><span class="text-info">Date de creation: </span> {{$produit->created_at}} </div><br>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
