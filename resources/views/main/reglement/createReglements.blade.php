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
  
      <form action="{{route('reglements.store')}}" enctype="multipart/form-data"  method="post" >
        @csrf
        <h3 class="text-center">Formulaire des reglements :</h3>
        <p class="text-center">ajouter  les Champ s'il vous plait. </p>
        <div class="row gy-3 ">
  
          <div class="col-md-12">
            <input type="text" name="numero_cheque" class="form-control" placeholder="numero_cheque" value="{{old('numero_cheque')}}">
          </div>
  
          <div class="col-md-12">
            <input type="text" name="montant" class="form-control" placeholder="montant" value="{{old('montant')}}" >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="banque" class="form-control" placeholder="banque" value="{{old('banque')}}" >
          </div>
  
          <div class="col-md-12">
            <label for="date_reglement">date réglement</label>
            <input type="date" name="date_reglement" id="date_reglement" class="form-control" placeholder="date réglement" value="{{old('date_reglement')}}" >
          </div>
  
  
           
  
            <div class="col-md-12">
                <select name="mode_paiement" class="form-select"  >
                    <option selected>Choisir Mode de Paiement</option>
                    <option value="cheque">cheque</option>
                    <option value="crédit">crédit</option>
                    <option value="espece">espece</option>
                </select>
            </div>
          
  
          <div class="col-md-12">
              <select name="devi_id" class="form-select"  >
                  <option selected>Choisir le Nom de devis</option>
                 @foreach($devis as $devi)
                  <option value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                  @endforeach
                </select>
          </div>
  
         
          <div class="col-md-12">
            <select name="client_id" class="form-select"  >
                <option selected>Choisir le nom de client</option>
               @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->nom}}</option>
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