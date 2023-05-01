@extends('layout.layouts')
@section('title')
l'ajout d'un Devi.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Devis</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Devis</li>
      </ol>

    </div>
  </div>
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
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

    <form action="{{route('devis.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire du Devi :</h3>
      <p class="text-center">Remplir tout les Champs s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
            <p>Devi (facultative) : </p>
          <input type="file" name="doc" class="form-control">
        </div>

        <br><hr><br>

        <div class="col-md-12">
          <input type="text" name="nom_devi" class="form-control" placeholder="Nom de devi" required>
        </div>

        <div class="col-md-12">
          <input type="date" name="date_devi" class="form-control" placeholder="Date de devi" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="numero_devi" class="form-control" placeholder="Numéro de devis" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="numero_devi" class="form-control" placeholder="Totale TTC" required>
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
