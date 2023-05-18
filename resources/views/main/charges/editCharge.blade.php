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
  
      <form action="{{route('charges.update',$charge->id)}}" enctype="multipart/form-data"  method="post" >
        @csrf
        @method('PUT')
        <h3 class="text-center">Formulaire des charges :</h3>
        <p class="text-center">Remplir  les Champ s'il vous plait. </p>
        <div class="row gy-3 ">
  
          <div class="col-md-12">
            <input type="text" name="mod" class="form-control" value="{{$charge->mod}}" placeholder="MOD" >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="mp" class="form-control" value="{{$charge->mp}}" placeholder="MP" >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="montant_charges_matier" value="{{$charge->montant_charges_matier}}" class="form-control" placeholder="montant_charges_matier" >
          </div>
  
          <div class="col-md-12">
              <input type="text" name="montant_credit" value="{{$charge->montant_credit}}" class="form-control" placeholder="montant_credit" >
            </div>
  
           
  
            <div class="col-md-12">
                <select name="mode_paiement" class="form-select" >
                    <option value="{{$charge->mode_paiement}}" selected>{{$charge->mode_paiement}}</option>
                    <option value="cheque">cheque</option>
                    <option value="crédit">crédit</option>
                    <option value="espece">espece</option>
                </select>
            </div>
          
  
          <div class="col-md-12">
              <select name="devi_id" class="form-select"  >
                  
                 @foreach($devis as $devi)
                 @if($devi->id==$charge->devi_id)
                  <option selected value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                  @else 
                  <option  value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                  @endif
                  @endforeach
                </select>
          </div>
  
          <div class="col-md-12">
              <select name="fournisseur_id" class="form-select"  >
                  
                 @foreach($fournisseurs as $fournisseur)
                 @if($fournisseur->id==$charge->fournisseur_id)
                  <option selected value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                  @else 
                  <option  value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                  @endif
                  @endforeach
                </select>
          </div>
          <div class="col-md-12">
            <select name="matier_id" class="form-select"  >
                
               @foreach($matiers as $matier)
               @if($matier->id==$charge->matier_id)
                <option selected value="{{$matier->id}}">{{$matier->designation}}</option>
                @else 
                <option  value="{{$matier->id}}">{{$matier->designation}}</option>
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