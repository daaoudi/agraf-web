@extends('layout.layouts')
@section('title')
la modification d'un Matier :
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
 
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Ouvrage</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
      <li>Ouvrage</li>
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

    <form action="{{route('ouvrages.update',$ouvrage->id)}}" enctype="multipart/form-data"  method="post" >
        @csrf
        @method('PUT')
      <h3 class="text-center">Formulaire de Matier : {{$ouvrage->designation}}</h3>
    
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" value="{{$ouvrage->designation_ouvrage}}" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="prix_unitaire" class="form-control" value="{{$ouvrage->prix_unitaire}}" placeholder="Type Matier" required>
        </div>

        <div class="col-md-12">
          <input type="number" name="qte" class="form-control" value="{{$ouvrage->qte}}" placeholder="quantité" required>
        </div>

        <div class="col-md-12">
            <input type="number" name="unite" class="form-control" value="{{$ouvrage->unite}}" placeholder="unité" required>
          </div>

          <div class="col-md-12">
            <input type="datetime-local" name="date_r" class="form-control" required>
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
