@extends('layout.layouts')
@section('title')
la modification  d'un Fournisseur : {{$fournisseur->nom .' '. $fournisseur->prenom}}.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
  <button class="go-back" onclick="history.back();">
    <span class="material-symbols-outlined">
    arrow_back
    </span></button>
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>fournisseur</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>fournisseur</li>
      </ol>

    </div>
  </div>
  
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
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

    <form action="{{route('fournisseurs.update',$fournisseur->id)}}" enctype="multipart/form-data"  method="POST" >
      @csrf
      @method('PUT')
      <h3 class="text-center text-dark">Formulaire de fournisseur: {{$fournisseur->nom .' '. $fournisseur->prenom}} </h3>
      
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="nom" value="{{$fournisseur->nom}}" class="form-control" placeholder="Nom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prenom" value="{{$fournisseur->prenom}}" class="form-control" placeholder="Prenom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="telephone" value="{{$fournisseur->telephone}}" class="form-control" placeholder="Telephone" required>
        </div>

        <div class="col-md-12 ">
          <input type="text" class="form-control" value="{{$fournisseur->montant}}" name="montant" placeholder="Montant" required>
        </div>

        <div class="col-md-12 ">
            <input type="text" class="form-control" value="{{$fournisseur->montant}}" name="montant_en_avance" placeholder="Montant_en_avance" required>
          </div>

        <div class="col-md-12">
          <input type="email" class="form-control" value="{{$fournisseur->email}}" name="email" placeholder="Email" required>
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