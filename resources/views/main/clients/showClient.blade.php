@extends('layout.layouts')

@section('title')
{{$clients->nom .''. $clients->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Clients</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Clients</li>
      </ol>

      <a href={{route('clients.create')}} class="btn btn-warning">
        + Ajouter un client
      </a>


    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <button class="go-back" onclick="history.back();">
              <span class="material-symbols-outlined">arrow_back</span>
            </button>
            @if (session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @endif
  
            <div class="card-content mt-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-item mb-3">
                    <span class="card-label"><strong>Nom:</strong></span>
                    <span class="card-value">{{ $clients->nom }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mb-3">
                    <span class="card-label"><strong>Prénom:</strong></span>
                    <span class="card-value">{{ $clients->prenom }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mb-3">
                    <span class="card-label"><strong>Téléphone:</strong></span>
                    <span class="card-value">{{ $clients->telephone }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mb-3">
                    <span class="card-label"><strong>Montant:</strong></span>
                    <span class="card-value">{{ $clients->montant }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mb-3">
                    <span class="card-label"><strong>Email:</strong></span>
                    <span class="card-value">{{ $clients->email }}</span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card-actions mt-4">
                    @if (auth()->check() && auth()->user()->is_admin)
                    <button class="btn btn-success">
                      <a href="{{ route('clients.edit', $clients->id) }}"><span class="material-symbols-outlined">edit</span></a>
                    </button>
                    <form action="{{ route('clients.destroy', $clients->id) }}" style="display: inline-block;" method="post" id="{{ $clients->id }}">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button class="btn btn-danger" onclick="event.preventDefault();
                      if (confirm('Êtes-vous sûr de vouloir supprimer ?'))
                        document.getElementById('{{ $clients->id }}').submit();" type="submit">
                      <span class="material-symbols-outlined">delete</span>
                    </button>
                    @else
                    <span class="text-danger">Vous n'avez pas accès à ces actions !</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  







@endsection