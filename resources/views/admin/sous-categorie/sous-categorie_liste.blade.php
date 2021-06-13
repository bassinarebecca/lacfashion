@extends('layout.dashboard')
@section('contenu')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Liste des sous-categories de vêtements</h6>
      <a class=" font-weight-bold text-white btn btn-primary" href="{{route('souscategorie.create')}}"><i class="text-white fas fa-plus-circle"></i> Sous-categorie</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
            <th>#</th>
              <th>Nom</th>
              <th>Photo</th>
              <th>Voir</th>
              <th>Editer</th>
              <th>Supprimer</th>
            </tr>
          </thead>
            <tbody>
                @foreach ($categories as $key=>$categorie)
                    <tr class="text-center">
                        <td class="text-bold">{{++$key}}  </td>
                        <td class="text-bold"> {{$categorie->nom}} </td>
                        <td><img class="img-fluide" src="{{asset('storage').'/'.$categorie->photo}}" style="width:40px;height:40px;" class="bf5 border rounded-circle "></td>
                        <td><a href="  "><button class="btn btn-success"> <i class="fas fa-eye"></i></button></a>  </td>
                        <td> <a href="{{route('scategorie.update', $categorie->id)}}  "><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>  </td>
                        <td>
                            <form action="{{route('categorie.delete', $categorie->id)}}" method="post" class="d-inline">
                                @csrf
                                    @method('DELETE')
                                <button onclick='return confirm("êtes-vous sûre de supprimer cette categorie?")'; type="submit" class="btn btn-warning"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
