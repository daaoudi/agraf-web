@extends('layout.layouts')
@section('title')
la modification  d'un client.
@endsection

@section('content')
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 " data-aos="fade">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

    <form action="{{route('clients.update',$client->id)}}" enctype="multipart/form-data"  method="POST" >
      @csrf
      @method('PUT')
      <h3 class="text-center text-dark">Formulaire de client: {{$client->nom}} </h3>
      
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="nom" value="{{$client->nom}}" class="form-control" placeholder="Nom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prenom" value="{{$client->prenom}}" class="form-control" placeholder="Prenom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="telephone" value="{{$client->telephone}}" class="form-control" placeholder="Telephone" required>
        </div>

        <div class="col-md-12 ">
          <input type="text" class="form-control" value="{{$client->montant}}" name="montant" placeholder="Montant" required>
        </div>

        <div class="col-md-12">
          <input type="email" class="form-control" value="{{$client->email}}" name="email" placeholder="Email" required>
        </div>

        

        <div class="col-md-12 text-center">
          
        
         
          <button class="btn btn-warning" type="submit">Modifier</button>
        </div>

      </div>
    </form>
   
  </div>

    </div>
</div>











@endsection