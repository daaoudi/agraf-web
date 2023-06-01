@extends('layout.layouts')
@section('title')
la modification d'un Article:{{$ouvrage->designation_ouvrage}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/features-1.jpg');">
 
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Article</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
      <li>Article</li>
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

      <form action="{{ route('ouvrages.update', $ouvrage->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <h3 class="text-center">Formulaire d'ouvrage : {{ $ouvrage->designation_ouvrage }}</h3>
    
        <div class="row gy-3 ">
    
            <div class="col-md-12">
                <label for="designation_ouvrage">Designation d'ouvrage:</label>
                <input type="text" name="designation_ouvrage" class="form-control"
                    value="{{ $ouvrage->designation_ouvrage }}" placeholder="Designation" >
            </div>
    
            <div class="col-md-12">
                <label for="prix_unitaire">Prix unitaire:</label>
                <input type="text" name="prix_unitaire" class="form-control" value="{{ $ouvrage->prix }}"
                    placeholder="Prix Unitaire" >
            </div>
    
            <div class="col-md-12">
                <label for="qte">Quantité:</label>
                <input type="text" name="qte" class="form-control" value="{{ $ouvrage->qte }}" placeholder="Quantité"
                    >
            </div>
    
            <div class="col-md-12">
                <label for="unite">Unité:</label>
                <input type="text" name="unite" class="form-control" value="{{ $ouvrage->unite }}" placeholder="Unité"
                    >
            </div>
    
            <div class="col-md-12">
                <label for="devi_id">Devi:</label>
                <select name="devi_id" id="devi_id" class="form-select">
                    <option disabled>Choisir le nom de devis</option>
                    @foreach ($devis as $devi)
                        <option value="{{ $devi->id }}" @if($devi->id === $ouvrage->devi_id) selected @endif>{{ $devi->nom_devi }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="col-md-12 my-5">
                <label for="etat">Etat:</label>
                <br>
                <select name="etat" class="form-select">
                    <option disabled>Choisir l'etat</option>
                    <option value="pas encore" @if($ouvrage->etat === 'pas encore') selected @endif>Pas encore</option>
                    <option value="en cours" @if($ouvrage->etat === 'en cours') selected @endif>En cours</option>
                    <option value="complété" @if($ouvrage->etat === 'complété') selected @endif>Complété</option>
                </select>
            </div>
    
            <div class="col-md-12 text-center">
                <button class="btn btn-warning" type="submit">Modifier</button>
            </div>
    
        </div>
    </form>
    
  </div><!-- End Quote Form -->

    </div>
</div>











@endsection
