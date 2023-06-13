@extends('layout.layouts')
@section('title')
l'ajout d'un Fournisseur.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/constructions-2.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Fournisseurs</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Fournisseurs</li>
      </ol>

    </div>
  </div>
<div class="container-lg" style="position:relative;top:100px;min-height:992px;">
  <button class="go-back" onclick="history.back();">
    <span class="material-symbols-outlined">
    arrow_back
    </span></button> 
  <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 " data-aos="fade">
          @if ($errors->any())
          <div class="alert alert-danger text-center">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

    <form action="{{route('fournisseurs.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire du Fournisseur :</h3>
      <p class="text-center">Remplir tout les Champs s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="nom" class="form-control" placeholder="Nom" >
        </div>

        <div class="col-md-12">
          <input type="text" name="prenom" class="form-control" placeholder="Prenom" >
        </div>

        <div class="col-md-12">
          <input type="text" name="telephone" class="form-control" placeholder="Telephone" >
        </div>


        

        <div class="col-md-12 text-center">
          
        
         
          <button class="btn btn-warning" type="submit">Valider</button>
        </div>

      </div>
    </form>
  </div>

    </div>
</div>











@endsection
