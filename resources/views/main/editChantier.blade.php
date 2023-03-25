@extends('layout.layouts')
@section('title')
la modification  d'un chantier : {{$chantiers->designation}}.
@endsection

@section('content')
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
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

    <form action="{{route('chantiers.update',$chantiers->id)}}" enctype="multipart/form-data"  method="POST" >
      @csrf
      @method('PUT')
      <h3 class="text-center text-dark">Formulaire de chantier: {{$chantiers->designation}} </h3>
      <p class="text-center">Remplir tout les s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" value="{{$chantiers->designation}}" class="form-control"  required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prix" value="{{$chantiers->prix}}" class="form-control"  required>
        </div>

        <div class="col-md-12">
          <input type="text" name="ville" value="{{$chantiers->ville}}" class="form-control"  required>
        </div>

        <div class="col-md-12 ">
            <label for="paiement">Votre Type de Paiement :</label>
          <input type="text" class="form-control" value="{{$chantiers->mode_paiement}}" id="paiement" disabled required>
        </div>

        <div class="col-md-12">
            <select name="mode_paiement" class="form-select"  required>
                <option selected>Changer votre Type de Paiment</option>
               
                <option value="Cheque">Cheque</option>
                <option value="Espece">Espece</option>
                <option value="Virement">Virement</option>
              </select>
        </div>

        

        <div class="col-md-12 text-center">
          
        
         
          <button class="btn btn-warning" type="submit">Modifier</button>
        </div>

      </div>
    </form>
   
  </div>

    </div>
</div>











@endsection