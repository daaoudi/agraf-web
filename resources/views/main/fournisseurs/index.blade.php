@extends('layout.layouts')

@section('title')
liste des Fournisseurs
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Fournisseurs</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Fournisseurs</li>
      </ol>

      <a href={{route('fournisseurs.create')}} class="btn btn-warning">
        + Ajouter un fournisseur
      </a>


    </div>
  </div>

<div class="container-lg" style="position:relative;top:50px;min-height:768px;">
  <button class="go-back" onclick="history.back();">
    <span class="material-symbols-outlined">
    arrow_back
    </span></button>
    
    <div class="card">
        <div class="card-header">
            @if (session()->has('success'))
            <div class="alert alert-success text-center">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de fournisseurs: {{count($fournisseurs)}}</h4>        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>nom</th>
              <th>prenom</th>
              <th>telephone</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach($fournisseurs as $fournisseur)
              <tr>
                  <td>{{$fournisseur->nom}}</td>
                  <td>{{$fournisseur->prenom}}</td>
                  <td>{{$fournisseur->telephone}}</td>

                 
                  <td>
                    @if(auth()->check())
                      @if(auth()->user()->is_admin)
                    <button title="Modifier" class="btn btn-primary btn-sm"><a href="{{route('fournisseurs.edit',$fournisseur->id)}}"><span class="material-symbols-outlined">
                      edit
                      </span></a></button>
                      <form action="{{route('fournisseurs.destroy',$fournisseur->id)}}" style="display: inline-block;" method="post" id="{{$fournisseur->id}}">
                      @csrf
                      @method('DELETE')
                      </form>

                      <button title="Supprimer" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                      if(confirm('vous êtes sure pour la suppression ?'))
                      document.getElementById('{{$fournisseur->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                      delete
                      </span> </button>
                      <button title="View" class="btn btn-secondary btn-sm view"> <a href="{{route('fournisseurs.show',$fournisseur->id)}}"> <span class="material-symbols-outlined">
                          visibility
                          </span></a></button>
                          @else
                      <span style="color:red;"> vous n'êtes pas l'accès pour les actions !</span>
                        @endif
                        @endif
                        </td>
              </tr>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>








@endsection
