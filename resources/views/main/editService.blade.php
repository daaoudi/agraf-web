@extends('layout.layouts')
@section('title')
la modification de {{$service->nom_service}}.
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

      <form action="{{route('services.update',$service->id)}}" enctype="multipart/form-data"  method="POST" >
        @csrf
        @method('PUT')
        <h3 class="text-center text-dark">Formulaire de la service: {{$service->nom_service}} </h3>
        
        <div class="row gy-3 ">
  
          <div class="col-md-12">
            <input type="text" name="nom_service" value="{{$service->nom_service}}" class="form-control" required>
          </div>
  
          <div class="col-md-12">
            <label for="description1" class="form-label">description :</label>
            <textarea class="form-control" name="description" id="description1"  required rows="3">{{$service->description}}</textarea>
            </div>

            <div class="col-md-12 ">
                <label for="service1">Votre Type de Service Ancien :</label>
              <input type="text" name="type_service" class="form-control" value="{{$service->type_service}}" id="service1"  required>
            </div>

            <div class="col-md-12">
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
  
              <div class="col-md-12">
                <label for="img" class="form-label">Image de la Service</label>
                <input class="form-control" name="image" type="file" id="img">
                </div>
                <div class="col-md-12">
                    <label for="old_image">Ancien Image :</label><br>
                    <img src="{{asset('./storage/images/'.$service->image)}}" alt="..." 
                    style="aspect-ratio:0.5;">
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

