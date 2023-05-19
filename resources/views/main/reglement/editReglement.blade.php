@extends('layout.layouts')
@section('title')
Edit de reglement.
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
  
      <form action="{{route('reglements.update',$reglement->id)}}" enctype="multipart/form-data"  method="post" >
        @csrf
        @method('PUT')
        <h3 class="text-center">Formulaire des reglements :</h3>
        <p class="text-center">Modifier  les Champ s'il vous plait. </p>
        <div class="row gy-3 ">
  
          <div class="col-md-12">
            <input type="text" name="numero_cheque" value="{{$reglement->numero_cheque}} " class="form-control" placeholder="numero_cheque" >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="montant" value="{{$reglement->montant}} " class="form-control" placeholder="montant"  >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="banque" value="{{$reglement->banque}} " class="form-control" placeholder="banque"  >
          </div>
  
          <div class="col-md-12">
            <label for="date_reglement">date réglement</label>
            <input type="date" name="date_reglement" value="{{$reglement->date_reglement}} " id="date_reglement" class="form-control"   >
          </div>
  
  
           
  
            <div class="col-md-12">
                <select name="mode_paiement" class="form-select"  >
                    <option value="{{$reglement->mode_paiement}}" selected>{{$reglement->mode_paiement}}</option>
                    <option value="cheque">cheque</option>
                    <option value="crédit">crédit</option>
                    <option value="espece">espece</option>
                </select>
            </div>
          
  
          <div class="col-md-12">
              <select name="devi_id" class="form-select"  >
                @foreach($devis as $devi)
                @if ($devi->id==$reglement->devi_id)
                     <option value="{{$devi->id}}" selected>{{$devi->nom_devi}}</option>
                     @else
                       <option value="{{$devi->id}}">{{$devi->nom_devi}}</option> 
                @endif
                 
                
                  
                  @endforeach
                </select>
          </div>
  
         
          <div class="col-md-12">
            <select name="client_id" class="form-select"  >
                @foreach($clients as $client)
                @if ($client->id==$reglement->client_id)
                <option value="{{$client->id}}" selected>{{$client->nom}}</option>
                @else 
                  <option value="{{$client->id}}">{{$client->nom}}</option>
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