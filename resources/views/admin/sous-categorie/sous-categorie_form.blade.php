@extends('layout.dashboard')
@section('contenu')
<div class="droite  card col ">
    <div class="card-header text-center font-weight-bold"> <i class="text-info fas fa-plus-circle"></i> sous-Categorie</div>
    <div class="card-body">
        <form method="post" action="{{route('souscategorie.store')}}" id="tr_form" enctype="multipart/form-data" >
            @csrf
            <div class="form-group row">
                <label class="col-12 col-lg-2 text-right control-label col-form-label" > Categorie:</label>
                <div class="col ">
                <select class="custom-select form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" value="{{ old('categorie_id') }}">
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
@endsection()



