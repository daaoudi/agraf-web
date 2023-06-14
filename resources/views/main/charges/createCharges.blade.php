@extends('layout.layouts')
@section('title')
l'ajout des Achats MP.
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center " style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Achats MP</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/charges">Achats MP</a> </li>
      </ol>
  
    </div>
  </div>

  <div class="container-lg my-5" style="position:relative;top:50px;min-height:1200px;">
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
  
        <form action="{{route('charges.store')}}" enctype="multipart/form-data" method="post">
          @csrf
          <h3 class="text-center">Formulaire des Achats MP :</h3>
          <p class="text-center">Remplir les champs s'il vous plaît.</p>
          <div class="row gy-3 ">
              
                      <div class="col-md-12">
                          <label for="designation">Designation :</label>
                          <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="{{old('desination')}}">
                      </div>
              
              <div class="col-md-12">
                  <label for="prix">Prix :</label>
                  <input type="text" name="prix" id="prix" class="form-control" placeholder="prix" value="{{old('prix')}}">
              </div>
              <div class="col-md-12">
                  <label for="qte">Quantite :</label>
                  <input type="text" name="qte" id="qte" class="form-control" placeholder="Quantite" value="{{old('qte')}}">
              </div>
              <div class="col-md-12">
                  <label for="unite">Unité d'achat :</label>
                  <input type="text" name="unite" id="unite" class="form-control" placeholder="Unite" value="{{old('unite')}}">
              </div>

              <div class="col-md-12">
                  <label for="date_charge">Date de charge :</label>
                  <input type="date" id="date_charge" name="date" class="form-control" value="{{old('date')}}">
              </div>
      
              <div class="col-md-12">
                  <label for="mode_paiement">Mode de paiement :</label>
                  <select name="mode_paiement" id="mode_paiement" class="form-select">
                      <option selected disabled>Choisir le mode de paiement</option>
                      <option value="cheque">Chèque</option>
                      <option value="crédit">Crédit</option>
                      <option value="espece">Espèce</option>
                  </select>
              </div>
      

      
              <div class="col-md-12">
                  <label for="fournisseur_id">Fournisseur :</label>
                  <select name="fournisseur_id" id="fournisseur_id" class="form-select">
                      <option selected disabled>Choisir le nom du fournisseur</option>
                      @foreach($fournisseurs as $fournisseur)
                      <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                      @endforeach
                  </select>
              </div>

                @livewire('article-selection', ['devis' => $devis])
      
              <div class="col-md-12 text-center">
                  <button class="btn btn-warning" type="submit">Valider</button>
              </div>
      
          </div>
      </form>
      
    </div><!-- End Quote Form -->
  
      </div>
  </div>
  
@endsection