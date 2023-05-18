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
      <li><a href="/dashboard">Dashboard</a></li>
      <li>Matieres</li>
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

    <form action="{{route('matiers.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3 class="text-center">Formulaire de Matier :</h3>
      <p class="text-center">Remplir  les Champ s'il vous plait. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" placeholder="Designation" value="{{old('designation')}}" >
        </div>

        <div class="col-md-12">
          <input type="text" name="type" class="form-control" value="{{old('type')}}" placeholder="Type Matier" >
        </div>

        <div class="col-md-12">
          <input type="text" name="prix" class="form-control" value="{{old('prix')}}" placeholder="prix" >
        </div>

        <div class="col-md-12">
            <input type="text" name="qte" class="form-control" value="{{old('qte')}}" placeholder="qte" >
          </div>

          <div class="col-md-12">
            <input type="text" name="matiere_unite" value="{{old('matiere_unite')}}" class="form-control" placeholder="matiere_unite" >
          </div>

          <div class="col-md-12">
            <input type="date" name="date_r" value="{{old('date_r')}}" class="form-control"  >
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
