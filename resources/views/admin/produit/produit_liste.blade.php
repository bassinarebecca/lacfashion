@extends('layout.dashboard')
@section('contenu')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Liste des produits</h6>
      <a class=" font-weight-bold text-white btn btn-primary" href="{{route('produit.create')}}"><i class="text-white fas fa-plus-circle"></i> Produit</a>
      <a class=" font-weight-bold text-white btn btn-primary" href="{{route('produit.create')}}"><i class="text-white fas fa-plus-circle"></i> Stock</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
            <th>#</th>
              <th>Nom</th>
              <th>Stock</th>
              <th>Photo</th>
              <th>Voir</th>
              <th>Editer</th>
              <th>Supprimer</th>
            </tr>
          </thead>
            <tbody>
                @foreach ($produits as $key=>$produit)
                    <tr class="text-center">
                        <td class=" font-weight-bold">{{++$key}}  </td>
                        <td class=" font-weight-bold"> {{$produit->nom}} </td>

                        <td class=" font-weight-bold">@if($produit->stock >0) <span class="text-success ">en stock </span> ({{$produit->stock}})  @else <span class="text-danger"> en rupture </span>  @endif  </td>
                        <td><img src="{{asset('storage').'/'.$produit->photo}} " style="width:40px;height:40px;" class="bf5 border rounded-circle "></td>
                        <td><a href=" {{route('produit.show', $produit->id)}} "><button class="btn btn-success"> <i class="fas fa-eye"></i></button></a>  </td>
                        <td> <a href="{{route('produit.edit', $produit->id)}} "><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>  </td>
                        <td>
                            <form action="{{route('produit.delete', $produit->id)}}" method="post" class="d-inline">
                                @csrf
                                    @method('DELETE')
                                <button onclick='return confirm("êtes-vous sûre de supprimer cette produit?")'; type="submit" class="btn btn-warning"><i class="fas fa-trash"></i></button>
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
