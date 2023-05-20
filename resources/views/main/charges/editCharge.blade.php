@extends('layout.layouts')
@section('title')
Modifier les charges
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Charges</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Charges</li>
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
        <form action="{{route('charges.update',$charge->id)}}" enctype="multipart/form-data" method="post">
          @csrf
          @method('PUT')
          <h3 class="text-center">Formulaire des charges :</h3>
          <p class="text-center">Remplir les champs s'il vous plaît.</p>
          <div class="row gy-3 ">
      
              <div class="col-md-12">
                  <label for="mod">MOD :</label>
                  <input type="text" name="mod" id="mod" class="form-control" value="{{$charge->mod}}" placeholder="MOD">
              </div>
      
              <div class="col-md-12">
                  <label for="mp">MP :</label>
                  <input type="text" name="mp" id="mp" class="form-control" value="{{$charge->mp}}" placeholder="MP">
              </div>
      
              <div class="col-md-12">
                  <label for="montant_charges_matier">Montant des charges de matière :</label>
                  <input type="text" name="montant_charges_matier" id="montant_charges_matier" class="form-control" value="{{$charge->montant_charges_matier}}" placeholder="Montant des charges de matière">
              </div>
              
              <div class="col-md-12">
                  <label for="date_charge">Date de charge :</label>
                  <input type="date" id="date_charge" name="date_charge" class="form-control" value="{{$charge->date_charge}}">
              </div>
      
              <div class="col-md-12">
                  <label for="mode_paiement">Mode de paiement :</label>
                  <select name="mode_paiement" id="mode_paiement" class="form-select">
                      <option value="{{$charge->mode_paiement}}" selected>{{$charge->mode_paiement}}</option>
                      <option value="cheque">Chèque</option>
                      <option value="crédit">Crédit</option>
                      <option value="espece">Espèce</option>
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="devi_id">Devis :</label>
                  <select name="devi_id" id="devi_id" class="form-select">
                      @foreach($devis as $devi)
                      @if($devi->id==$charge->devi_id)
                      <option selected value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                      @else 
                      <option value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                      @endif
                      @endforeach
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="fournisseur_id">Fournisseur :</label>
                  <select name="fournisseur_id" id="fournisseur_id" class="form-select">
                      @foreach($fournisseurs as $fournisseur)
                      @if($fournisseur->id==$charge->fournisseur_id)
                      <option selected value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                      @else 
                      <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                      @endif
                      @endforeach
                  </select>
              </div>
      
              <div class="col-md-12">
                  <label for="matier_id">Matière :</label>
                  <select name="matier_id" id="matier_id" class="form-select">
                      @foreach($matiers as $matier)
                      @if($matier->id==$charge->matier_id)
                      <option selected value="{{$matier->id}}">{{$matier->designation}}</option>
                      @else 
                      <option value="{{$matier->id}}">{{$matier->designation}}</option>
                      @endif
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