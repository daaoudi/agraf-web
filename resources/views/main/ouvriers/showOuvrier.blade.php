@extends('layout.layouts')

@section('title')
  Ouvrier : {{$ouvrier->nom .'  ' . $ouvrier->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Ouvrier</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Ouvrier</li>
      </ol>

    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <button class="go-back" onclick="history.back();">
              <span class="material-symbols-outlined">arrow_back</span>
            </button>
          </div>
          <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @endif
  
            <div class="card-content">
              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="card-item">
                    <span class="card-label"><strong>Nom:</strong></span>
                    <span class="card-value">{{ $ouvrier->nom }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item">
                    <span class="card-label"><strong>Prénom:</strong></span>
                    <span class="card-value">{{ $ouvrier->prenom }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item">
                    <span class="card-label"><strong>Téléphone:</strong></span>
                    <span class="card-value">{{ $ouvrier->telephone }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item">
                    <span class="card-label"><strong>CIN:</strong></span>
                    <span class="card-value">{{ $ouvrier->cin }}</span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card-actions mt-4">
                    @if (auth()->check() && auth()->user()->is_admin)
                    <button class="btn btn-success">
                      <a href="{{ route('ouvriers.edit', $ouvrier->id) }}"><span class="material-symbols-outlined">edit</span></a>
                    </button>
                    <form action="{{ route('ouvriers.destroy', $ouvrier->id) }}" style="display: inline-block;" method="post" id="{{ $ouvrier->id }}">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button class="btn btn-danger" onclick="event.preventDefault();
                      if (confirm('Êtes-vous sûr de vouloir supprimer ?'))
                        document.getElementById('{{ $ouvrier->id }}').submit();" type="submit">
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