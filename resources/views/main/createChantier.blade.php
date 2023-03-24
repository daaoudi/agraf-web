@extends('layout.layouts')
@section('title')
l'ajout d'un chantier.
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

    <form action="{{route('chantiers.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire de chantier :</h3>
      <p class="text-center">Remplir tout les s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prix" class="form-control" placeholder="Prix" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="ville" class="form-control" placeholder="Ville" required>
        </div>

        

        <div class="col-md-12">
            <select name="mode_paiement" class="form-select"  required>
                <option selected>Choisir Type de Paiment</option>
               
                <option value="Cheque">Cheque</option>
                <option value="Espece">Espece</option>
                <option value="Virement">Virement</option>
              </select>
        </div>

        <div class="col-md-12">
            <select name="client_id" class="form-select"  required>
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
