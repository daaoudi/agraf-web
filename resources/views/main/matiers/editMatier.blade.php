@extends('layout.layouts')
@section('title')
la modification d'un Matier : {{$matier->designation}}.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
 
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Matiere</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
      <li>Matiere</li>
    </ol>

  </div>
</div>
<div class="container-lg" style="position:relative;top:100px;min-height:992px;">
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

      <form action="{{ route('matiers.update', $matier->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <h3 class="text-center">Formulaire de Matière : {{ $matier->designation }}</h3>
      
        <div class="row gy-3">
      
          <div class="col-md-12">
            <label for="designation">Désignation:</label>
            <input type="text" name="designation" class="form-control" value="{{ $matier->designation }}" id="designation" placeholder="Désignation">
          </div>
      
          <div class="col-md-12">
            <label for="type">Type de Matière:</label>
            <input type="text" name="type" class="form-control" value="{{ $matier->type }}" id="type" placeholder="Type de Matière" >
          </div>
      
          <div class="col-md-12">
            <label for="prix">Prix:</label>
            <input type="text" name="prix" class="form-control" value="{{ $matier->prix }}" id="prix" placeholder="Prix" >
          </div>
      
          <div class="col-md-12">
            <label for="qte">Quantité:</label>
            <input type="text" name="qte" class="form-control" value="{{ $matier->qte }}" id="qte" placeholder="Quantité" >
          </div>
      
          <div class="col-md-12">
            <label for="matiere_unite">Unité de Matière:</label>
            <input type="text" name="matiere_unite" class="form-control" value="{{ $matier->matiere_unite }}" id="matiere_unite" placeholder="Unité de Matière" >
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
