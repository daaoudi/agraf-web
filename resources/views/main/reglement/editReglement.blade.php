@extends('layout.layouts')
@section('title')
Edit de reglement.
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/design-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Reglements</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Reglements</li>
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
  
        <form action="{{ route('reglements.update', $reglement->id) }}" enctype="multipart/form-data" method="post">
          @csrf
          @method('PUT')
          <h3 class="text-center">Formulaire des règlements :</h3>
          <p class="text-center">Modifier tous les champs s'il vous plaît.</p>
          <div class="row gy-3 ">
      
              <div class="col-md-12">
                  <label for="numero_cheque">Numéro de chèque:</label>
                  <input type="text" name="numero_cheque" value="{{ $reglement->numero_cheque }}" class="form-control"
                      placeholder="Numéro de chèque">
              </div>
      
              <div class="col-md-12">
                  <label for="montant">Montant:</label>
                  <input type="text" name="montant" value="{{ $reglement->montant }}" class="form-control" placeholder="Montant">
              </div>
      
              <div class="col-md-12">
                  <label for="banque">Banque:</label>
                  <input type="text" name="banque" value="{{ $reglement->banque }}" class="form-control" placeholder="Banque">
              </div>
      
              <div class="col-md-12">
                  <label for="date_reglement">Date de règlement:</label>
                  <input type="date" name="date_reglement" value="{{ $reglement->date_reglement }}" id="date_reglement"
                      class="form-control">
              </div>
      
              <div class="col-md-12">
                  <label for="mode_paiement">Mode de paiement:</label>
                  <select name="mode_paiement" class="form-select">
                      <option selected disabled>Choisir le mode de paiement</option>
                      <option value="cheque" @if($reglement->mode_paiement === 'cheque') selected @endif>Chèque</option>
                      <option value="crédit" @if($reglement->mode_paiement === 'crédit') selected @endif>Crédit</option>
                      <option value="espece" @if($reglement->mode_paiement === 'espece') selected @endif>Espèce</option>
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="devi_id">Devis:</label>
                  <select name="devi_id" class="form-select">
                      @foreach ($devis as $devi)
                          @if ($devi->id == $reglement->devi_id)
                              <option value="{{ $devi->id }}" selected>{{ $devi->nom_devi }}</option>
                          @else
                              <option value="{{ $devi->id }}">{{ $devi->nom_devi }}</option>
                          @endif
                      @endforeach
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="client_id">Client:</label>
                  <select name="client_id" class="form-select">
                      @foreach ($clients as $client)
                          @if ($client->id == $reglement->client_id)
                              <option value="{{ $client->id }}" selected>{{ $client->nom }}</option>
                          @else
                              <option value="{{ $client->id }}">{{ $client->nom }}</option>
                          @endif
                      @endforeach
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