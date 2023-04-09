@extends('layout.layouts')
@section('title')
l'ajout d'un Matier.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Matieres</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Matieres</li>
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

    <form action="{{route('matiers.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire de Matier :</h3>
      <p class="text-center">Remplir tout les Champ s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="type" class="form-control" placeholder="Type Matier" required>
        </div>

        <div class="col-md-12">
          <input type="number" name="prix" class="form-control" placeholder="prix" required>
        </div>

        <div class="col-md-12">
            <input type="number" name="qte" class="form-control" placeholder="qte" required>
          </div>

          <div class="col-md-12">
            <input type="text" name="matiere_unite" class="form-control" placeholder="matiere_unite" required>
          </div>

          <div class="col-md-12">
            <input type="datetime-local" name="date_r" class="form-control"  required>
          </div>

          <div class="col-md-12">
            <input type="number" name="nmbr_piece_utiliser" class="form-control" placeholder="nmbr_piece_utiliser" required>
          </div>

        

        <div class="col-md-12">
            <select name="chantier_id" class="form-select"  required>
                <option selected>Choisir le Nom de Projet</option>
               @foreach($chantiers as $chantier)
                <option value="{{$chantier->id}}">{{$chantier->designation}}</option>
                @endforeach
              </select>
        </div>

        <div class="col-md-12">
            <select name="fournisseur_id" class="form-select"  required>
                <option selected>Choisir le nom de Fournisseur</option>
               @foreach($fournisseurs as $fournisseur)
                <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                @endforeach
              </select>
        </div>
        <div class="col-md-12">
          <select name="article_id" class="form-select"  required>
              <option selected>Choisir le nom d'Article</option>
             @foreach($articles as $article)
              <option value="{{$article->id}}">{{$article->nom}}</option>
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
