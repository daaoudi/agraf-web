@extends('layout.layouts')
@section('title')
l'ajout d'un chantier.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Chantiers</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
      <li>Chantiers</li>
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

    <form action="{{route('chantiers.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire de chantier :</h3>
      <p class="text-center">Remplir tout les champs s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" placeholder="Designation" value="{{old('designation')}} " required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prix" class="form-control" value="{{old('prix')}}" placeholder="Prix" required>
        </div>
        <div class="col-md-12">
          <input type="text" name="etat_avancement" class="form-control" value="{{old('etat_avancement')}}" placeholder="Etat Avancement" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="ville" class="form-control" value="{{old('ville')}}" placeholder="Ville" required>
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
        <div class="col-md-12">
          <select name="devi_id" class="form-select"  required>
              <option selected>Choisir le devi</option>
             @foreach($devis as $devi)
              <option value="{{$devi->id}}">{{$devi->nom_devi}}</option>
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
