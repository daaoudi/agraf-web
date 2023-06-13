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
      <li><a href="/dashboard">Dashboard</a></li>
        <li>Clients</li>
    </ol>

  </div>
</div>
<div class="container-lg" style="position:relative;top:50px;min-height:992px;">
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

      <form action="{{route('clients.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center">Formulaire de client :</h3>
        <p class="text-center">Remplir tous les champs s'il vous plaît.</p>
        <div class="row gy-3">
      
          <div class="col-md-12">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="{{old('nom')}}" required>
          </div>
      
          <div class="col-md-12">
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" value="{{old('prenom')}}" required>
          </div>
      
          <div class="col-md-12">
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Téléphone" value="{{old('telephone')}}" required>
          </div>
      
          <div class="col-md-12">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{old('email')}}">
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
