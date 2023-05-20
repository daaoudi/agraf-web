@extends('layout.layouts')
@section('title')
l'ajout de reglement.
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Reglements</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Reglements</li>
      </ol>
  
    </div>
  </div>

  <div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
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
  
        <form action="{{ route('reglements.store') }}" enctype="multipart/form-data" method="post">
          @csrf
          <h3 class="text-center">Formulaire des règlements :</h3>
          <p class="text-center">Ajouter tous les champs s'il vous plaît.</p>
          <div class="row gy-3 ">
      
              <div class="col-md-12">
                  <label for="numero_cheque">Numéro de chèque:</label>
                  <input type="text" name="numero_cheque" class="form-control" placeholder="Numéro de chèque"
                      value="{{ old('numero_cheque') }}">
              </div>
      
              <div class="col-md-12">
                  <label for="montant">Montant:</label>
                  <input type="text" name="montant" class="form-control" placeholder="Montant" value="{{ old('montant') }}">
              </div>
      
              <div class="col-md-12">
                  <label for="banque">Banque:</label>
                  <input type="text" name="banque" class="form-control" placeholder="Banque" value="{{ old('banque') }}">
              </div>
      
              <div class="col-md-12">
                  <label for="date_reglement">Date de règlement:</label>
                  <input type="date" name="date_reglement" id="date_reglement" class="form-control"
                      placeholder="Date de règlement" value="{{ old('date_reglement') }}">
              </div>
      
              <div class="col-md-12">
                  <label for="mode_paiement">Mode de paiement:</label>
                  <select name="mode_paiement" class="form-select">
                      <option selected disabled>Choisir le mode de paiement</option>
                      <option value="cheque">Chèque</option>
                      <option value="crédit">Crédit</option>
                      <option value="espece">Espèce</option>
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="devi_id">Devis:</label>
                  <select name="devi_id" class="form-select">
                      <option selected disabled>Choisir le nom de devis</option>
                      @foreach ($devis as $devi)
                          <option value="{{ $devi->id }}">{{ $devi->nom_devi }}</option>
                      @endforeach
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="client_id">Client:</label>
                  <select name="client_id" class="form-select">
                      <option selected disabled>Choisir le nom de client</option>
                      @foreach ($clients as $client)
                          <option value="{{ $client->id }}">{{ $client->nom }}</option>
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