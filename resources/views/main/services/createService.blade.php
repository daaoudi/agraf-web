@extends('layout.layouts')
@section('title')
l'ajout d'un services.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/alt-services-2.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Services</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Services</li>
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
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{route('services.store')}}" enctype="multipart/form-data" method="post">
        @csrf
          <div class="col-md-12 mb-5">
      <label for="service" class="form-label">Nom Service :</label>
      <input type="text" class="form-control" name="nom_service" id="service" placeholder="Nom de la Service" >
      </div>
      <div class="col-md-12">
      <label for="description1" class="form-label">description de la Service :</label>
      <textarea class="form-control" name="description" id="description1" placeholder="description de la Service"  rows="3"></textarea>
      </div>
      <div class="col-md-12 my-5">
      <label for="img" class="form-label">Image de la Service</label>
      <input class="form-control" name="image" type="file" id="img">
      </div>
      <div class="col-md-12 mb-5">
        <select name="type_service" class="form-select" >
        <option selected>Choisir le Type de la Service</option>
        <option value="Terrassement">Terrassement</option>
        <option value="Fondation">Fondation</option>
        <option value="Dallages et Poteaux">Three</option>
        <option value="Mur De Cloture et Cage d'escalier et Picsine">Mur De Cloture et Cage d'escalier et Picsine</option>
        <option value="Carllage et Marbre">Carllage et Marbre</option>
        <option value="Peinture">Peinture</option>
        <option value="Plattre">Plattre</option>
        <option value="Menuiserie Bois">Menuiserie Bois</option>
        <option value="Menuiserie Alluminuim">Menuiserie Alluminuim</option>
        <option value="Sanitaire">Sanitaire</option>
        <option value="Entretien et Réparation">Entretien et Réparation</option>
      </select>
      </div>
      
      
      
      <div class="col-12 text-center">
          <button class="btn btn-primary"  type="submit">Valider</button>
      </div>
        </form>  

    </div>

</div>
</div>

@endsection