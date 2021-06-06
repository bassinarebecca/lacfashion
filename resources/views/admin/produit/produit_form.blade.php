@extends('layout.dashboard')
@section('contenu')
<div class="droite  card col ">
    <div class="card-header text-center font-weight-bold"> <i class="text-info fas fa-plus-circle"></i> Produit</div>
    <div class="card-body">
        <form method="post" action="{{route('produit.store')}}" id="tr_form" enctype="multipart/form-data" >
            @csrf
            <div class="form-group row">
                <label class="col-12 col-lg-2 text-right control-label col-form-label" > Categorie: </label>
                <div class="col ">
                <select id='sel_depart' class="custom-select form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" value="{{ old('categorie_id') }}">
                  <option>Choisir la categorie</option>
                  @foreach ($categories as $categorie)
                  <option value="{{$categorie->id}}" >{{$categorie->nom}}</option>
                  @endforeach
                </select>
                @error('categorie_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-lg-2 text-right control-label col-form-label" >Sous  Categorie:</label>
                <div class="col ">
                <select  id='sel_emp' class="custom-select form-control @error('sous_categorie_id') is-invalid @enderror" name="sous_categorie_id" value="{{ old('sous_categorie_id') }}">
                  <option>Choisir la sous categorie</option>
                  @foreach ($scategories as $scategorie)
                  <option value="{{$scategorie->id}}" >{{$scategorie->nom}}</option>
                  @endforeach
                </select>
                @error('sous_categorie_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row ">
                <label for="code" class="col-12 col-lg-2 text-right control-label col-form-label">Nom:</label>
                <div class="col ">
                    <input id="code" type="text" class="  form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  placeholder="ajouter le nom ">
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row ">
                <label for="code" class="col-12 col-lg-2 text-right control-label col-form-label">Stok :</label>
                <div class="col ">
                    <input id="code" type="text" class="  form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}"  placeholder="ajouter le stock ">
                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row ">
                <label for="code" class="col-12 col-lg-2 text-right control-label col-form-label">Prix:</label>
                <div class="col ">
                    <input id="code" type="text" class="  form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}"  placeholder="ajouter le prix ">
                    @error('prix')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="code" class="col-12 col-lg-2 text-right control-label col-form-label">Photo:</label>
                <div class="col">
                    <input id="appro" type="file" placeholder="entrez le appro" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" autocomplete="appro" autofocus>
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex float-right col-auto">
                <button type="submit" class="btn btn-info  ">Ajouter</button>
                <button type="reset" class="btn btn-dark ml-2  ">Annuler</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script type='text/javascript'>
    $(document).ready(function(){
      // Department Change
      $('#sel_depart').change(function(){
         // Department id
         var id = $(this).val();
         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();
         // AJAX request
         $.ajax({
           url: 'getSous_categorie/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }
             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){
                 var id = response['data'][i].id;
                 var nom = response['data'][i].nom;
                 var option = "<option value='"+id+"'>"+nom+"</option>";
                 $("#sel_emp").append(option);
               }
             }
           }
        });
      });
    });
    </script>
@endsection



