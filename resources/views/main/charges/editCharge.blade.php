@extends('layout.layouts')
@section('title')
Modifier les Achats MP
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Achats MP</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/charges">Achats MP</a></li>
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
                  <label for="designation">Designation :</label>
                  <input type="text" name="designation" id="designation" class="form-control" value="{{$charge->designation}}" placeholder="designation">
              </div>
      
              <div class="col-md-12">
                  <label for="prix">prix :</label>
                  <input type="text" name="prix" id="prix" class="form-control" value="{{$charge->prix}}" placeholder="prix">
              </div>
              <div class="col-md-12">
                  <label for="qte">Quantité :</label>
                  <input type="text" name="qte" id="qte" class="form-control" value="{{$charge->qte}}" placeholder="qte">
              </div>
              <div class="col-md-12">
                  <label for="unite">Unité :</label>
                  <input type="text" name="unite" id="unite" class="form-control" value="{{$charge->unite}}" placeholder="unite">
              </div>
              
              <div class="col-md-12">
                  <label for="date">Date de charge :</label>
                  <input type="date" id="date" name="date" class="form-control" value="{{$charge->date}}">
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