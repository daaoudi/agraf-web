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
      <li>Matiere</li>
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

    <form action="{{route('matiers.update',$matier->id)}}" enctype="multipart/form-data"  method="post" >
        @csrf
        @method('PUT')
      <h3 class="text-center">Formulaire de Matier : {{$matier->designation}}</h3>
    
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" class="form-control" value="{{$matier->designation}}" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
          <input type="text" name="type" class="form-control" value="{{$matier->type}}" placeholder="Type Matier" required>
        </div>

        <div class="col-md-12">
          <input type="number" name="prix" class="form-control" value="{{$matier->prix}}" placeholder="prix" required>
        </div>

        <div class="col-md-12">
            <input type="number" name="qte" class="form-control" value="{{$matier->qte}}" placeholder="qte" required>
          </div>

          <div class="col-md-12">
            <input type="text" name="matiere_unite" class="form-control" value="{{$matier->matiere_unite}}" placeholder="matiere_unite" required>
          </div>

          <div class="col-md-12">
            <input type="datetime-local" name="date_r" class="form-control" value="{{$matier->date_r}}" required>
          </div>

          <div class="col-md-12">
            <input type="number" name="nmbr_piece_utiliser" value="{{$matier->nmbr_piece_utiliser}}" class="form-control" placeholder="nmbr_piece_utiliser" required>
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
