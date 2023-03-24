@extends('layout.layouts')
@section('title')
l'ajout d'un client.
@endsection

@section('content')
<div class="container-fluid" style="display:flex;justify-content:center;align-items:center;position:relative;top:50px;min-height:992px;">
    <div class="row">
        <div class="col-md-6 " data-aos="fade">
    <form action="{{route('clients.store')}}" enctype="multipart/form-data"  method="post" >
      @csrf
      <h3>Get a quote</h3>
      <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
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
