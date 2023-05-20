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
  
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5 class="card-title mb-0">Ouvrage Details</h5>
                </div>
                <div class="card-body">
                    <div class="card-item">
                        <span class="card-label"><strong>Devi:</strong></span>
                        <span class="card-value">{{$ouvrage->devi->nom_devi}}</span>
                    </div>
                    <div class="card-item">
                        <span class="card-label"><strong>Designation d'ouvrage:</strong></span>
                        <span class="card-value">{{$ouvrage->designation_ouvrage}}</span>
                    </div>
                    <div class="card-item">
                        <span class="card-label"><strong>Prix:</strong></span>
                        <span class="card-value">{{$ouvrage->prix}}</span>
                    </div>
                    <div class="card-item">
                        <span class="card-label"><strong>Quantité:</strong></span>
                        <span class="card-value">{{$ouvrage->qte}}</span>
                    </div>
                    <div class="card-item">
                        <span class="card-label"><strong>Unité:</strong></span>
                        <span class="card-value">{{$ouvrage->unite}}</span>
                    </div>
                </div>
                @if(auth()->check() && auth()->user()->is_admin)
                <div class="card-footer bg-secondary">
                    <a href="{{route('ouvrages.edit',$ouvrage->id)}}" class="btn btn-success mr-2">
                        <span class="material-symbols-outlined">edit</span> Modifier
                    </a>
                    <form action="{{route('ouvrages.destroy',$ouvrage->id)}}" style="display: inline-block;" method="post" id="{{$ouvrage->id}}">
                        @csrf
                        @method('DELETE')
                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                            if(confirm('Vous êtes sûr de vouloir supprimer ?'))
                                document.getElementById('{{$ouvrage->id}}').submit();">
                            <span class="material-symbols-outlined">delete</span> Supprimer
                        </button>
                    </form>
                </div>
                @elseif(auth()->check())
                <div class="card-footer">
                    <span class="text-danger">Vous n'avez pas accès à ces actions !</span>
                </div>
                @endif
            </div>
        </div>
    </div>
  </div>


@endsection