@extends('layout.layouts')
@section('title')
l'ajout d'un Article.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Articles</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Articles</li>
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

    <form action="{{route('articles.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire d'Article :</h3>
      <p class="text-center">Remplir tout les Champ s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="article_unite" class="form-control" placeholder="article_unite" required>
        </div>
        

        <div class="col-md-12">
            <div class="form-group">
                <label for="Textarea1">Description d'article :</label>
                <textarea name="description" class="form-control" id="Textarea1" rows="3"></textarea>
              </div>
        </div>
        

        

        

        <div class="col-md-12">
            <select name="ouvrier_id" class="form-select"  required>
                <option selected>Choisir le Nom d'ouvrier</option>
               @foreach($ouvriers as $ouvrier)
                <option value="{{$ouvrier->id}}">{{$ouvrier->nom}}</option>
                @endforeach
              </select>
        </div>

        <div class="col-md-12">
            <select name="service_id" class="form-select"  required>
                <option selected>Choisir le nom de la Service</option>
               @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->nom_service}}</option>
                @endforeach
              </select>
        </div>
        <div class="col-md-12">
          <select name="chantier_id" class="form-select"  required>
              <option selected>Choisir le nom de la Projet</option>
             @foreach($chantiers as $chantier)
              <option value="{{$chantier->id}}">{{$chantier->nom_service}}</option>
              @endforeach
            </select>
      </div>

        

        <div class="col-md-12 text-center">
          
        
         
          <button class="btn btn-warning" type="submit">Valider</button>
        </div>

      </div>
    </form>
  </div><!-- End Quote Form -->

    </div>
</div>











@endsection
