@extends('layout.layouts')

@section('title')
{{$fournisseur->nom .' '. $fournisseur->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>fournisseurs</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>fournisseurs</li>
      </ol>

    </div>
  </div>
  <div class="container-lg">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-secondary text-white">
            <h5 class="card-title mb-0">Fournisseur Details</h5>
          </div>
          <div class="card-body">
            <div class="card-item">
              <span class="card-label"><strong>Nom:</strong></span>
              <span class="card-value">{{ $fournisseur->nom }}</span>
            </div>
            <div class="card-item">
              <span class="card-label"><strong>Prénom:</strong></span>
              <span class="card-value">{{ $fournisseur->prenom }}</span>
            </div>
            <div class="card-item">
              <span class="card-label"><strong>Téléphone:</strong></span>
              <span class="card-value">{{ $fournisseur->telephone }}</span>
            </div>
          </div>
          <div class="card-footer">
            @if (auth()->check() && auth()->user()->is_admin)
            <a href="{{ route('fournisseurs.edit', $fournisseur->id) }}" class="btn btn-primary btn-sm mr-2">
              <span class="material-symbols-outlined">edit</span> Modifier
            </a>
            <form action="{{ route('fournisseurs.destroy', $fournisseur->id) }}" style="display: inline-block;" method="post" id="{{ $fournisseur->id }}">
              @csrf
              @method('DELETE')
              <button title="Supprimer" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                if (confirm('Êtes-vous sûr de vouloir supprimer ?'))
                  document.getElementById('{{ $fournisseur->id }}').submit();"
                type="submit">
                <span class="material-symbols-outlined">delete</span> Supprimer
              </button>
            </form>
            @else
            <span class="text-danger">Vous n'avez pas accès à ces actions !</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  







@endsection