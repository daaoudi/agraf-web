@extends('layout.layouts')
@section('title')
l'ajout d'un Devi.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/constructions-3.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Projets</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Projets</li>
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
      <form action="{{route('devis.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center">Formulaire du Devi :</h3>
        <p class="text-center">Remplir tous les Champs s'il vous plaît.</p>
        <div class="row gy-3">
      
          <div class="col-md-12">
            <label for="doc">Devi (facultative) :</label>
            <input type="file" name="doc" id="doc" class="form-control">
          </div>
      
          <br>
          <hr>
          <br>
      
          <div class="col-md-12">
            <label for="nom_devi">Nom de devis :</label>
            <input type="text" name="nom_devi" id="nom_devi" class="form-control" placeholder="Nom de devis" value="{{old('nom_devi')}} ">
          </div>
      
          <div class="col-md-12">
            <label for="date_devi">Date de devis :</label>
            <input type="date" name="date_devi" id="date_devi" class="form-control" placeholder="Date de devis" value="{{old('date_devi')}} ">
          </div>
      
          <div class="col-md-12">
            <label for="numero_devi">Numéro de devis :</label>
            <input type="text" name="numero_devi" id="numero_devi" class="form-control" placeholder="Numéro de devis" value="{{old('numero_devi')}} ">
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
