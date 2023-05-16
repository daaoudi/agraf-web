@extends('layout.layouts')

@section('title')
  Ouvrage : {{$ouvrage->nom .'  ' . $ouvrage->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
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
    </span></button><div class="row">
      
        <div class="col-xl-12">
            
            
            <div class="card text-dark bg-white mx-auto" style="max-width: 600px;">
                <div class="card-header bg-secondary text-white">
                  <h5 class="card-title mb-0">Ouvrage Details</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <strong>Devi:</strong> {{$ouvrage->devi->nom_devi}}
                    </li>
                    <li class="list-group-item">
                      <strong>Designation d'ouvrage:</strong> {{$ouvrage->designation_ouvrage}}
                    </li>
                    <li class="list-group-item">
                      <strong>Prix:</strong> {{$ouvrage->prix}}
                    </li>
                    <li class="list-group-item">
                      <strong>Quantité:</strong> {{$ouvrage->qte}}
                    </li>
                    <li class="list-group-item">
                      <strong>Unité:</strong> {{$ouvrage->unite}}
                    </li>
                  </ul>
                </div>
                @if(auth()->check() && auth()->user()->is_admin)
                  <div class="card-footer bg-secondary">
                    <button class="btn btn-success" title="Modifier">
                      <a href="{{route('ouvrages.edit',$ouvrage->id)}}" class="text-white">
                        <span class="material-symbols-outlined">edit</span>
                      </a>
                    </button>
                    <form action="{{route('ouvrages.destroy',$ouvrage->id)}}" style="display: inline-block;" method="post" id="{{$ouvrage->id}}">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button class="btn btn-danger" title="Supprimer" onclick="event.preventDefault();
                    if(confirm('Vous êtes sûr de vouloir supprimer ?'))
                      document.getElementById('{{$ouvrage->id}}').submit();">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                  </div>
                @elseif(auth()->check())
                  <div class="card-footer">
                    <span class="text-danger">Vous n'avez pas l'accès pour effectuer des actions !</span>
                  </div>
                @endif
              </div>
              
        </div>
    </div>
</div>








@endsection