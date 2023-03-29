@extends('layout.layouts')
@section('title')
la modification d'un Ouvrier {{$ouvrier->nom . ' ' . $ouvrier->prenom}}.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Ouvrier</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Ouvrier</li>
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

    <form action="{{route('ouvriers.update',$ouvrier->id)}}" enctype="multipart/form-data"  method="post" >
      @csrf
      @method('PUT')
      <h3 class="text-center">Formulaire de l'Ouvrier : {{$ouvrier->nom . ' ' . $ouvrier->prenom}}</h3>
      <p class="text-center">Modifier les Champs . </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="nom" value="{{$ouvrier->nom}}" class="form-control" placeholder="Nom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prenom" value="{{$ouvrier->prenom}}" class="form-control" placeholder="Prenom" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="telephone" value="{{$ouvrier->telephone}}" class="form-control" placeholder="Telephone" required>
        </div>

        <div class="col-md-12">
            <input type="text" name="cin" value="{{$ouvrier->cin}}" class="form-control" placeholder="CIN" required>
          </div>

          <div class="col-md-12">
            <input type="text" name="type" value="{{$ouvrier->type}}" class="form-control" placeholder="Type_Ouvrier" required>
          </div>

          <div class="col-md-12">
            <input type="number" value="{{$ouvrier->salaire_par_semaine}}" name="salaire_par_semaine" class="form-control" placeholder="salaire_par_semaine" required>
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
