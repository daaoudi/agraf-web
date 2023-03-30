@extends('layout.layouts')
@section('title')
l'ajout d'un client.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Clients</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Clients</li>
    </ol>

  </div>
</div>
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
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

    <form action="{{route('clients.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire de client :</h3>
      <p class="text-center">Remplir tout les s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="nom" class="form-control" placeholder="Nom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="telephone" class="form-control" placeholder="Telephone" required>
        </div>

        <div class="col-md-12 ">
          <input type="text" class="form-control" name="montant" placeholder="Montant" required>
        </div>

        <div class="col-md-12">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
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
