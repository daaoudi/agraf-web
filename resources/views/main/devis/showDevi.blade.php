@extends('layout.layouts')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Devis</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Devis</li>
      </ol>

    </div>
  </div>
  <div class="container-lg">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="card-content">
              <button class="go-back" onclick="history.back();">
                <span class="material-symbols-outlined">arrow_back</span>
              </button>
              
  
              <div class="row mt-4">
                <div class="col-md-12">
                  <div class="card-item">
                    <span class="card-label"><strong>Nom de devi:</strong></span>
                    <span class="card-value">{{ $devi->nom_devi }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mt-3">
                    <span class="card-label"><strong>Numero de devi:</strong></span>
                    <span class="card-value">{{ $devi->numero_devi }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mt-3">
                    <span class="card-label"><strong>Date de devi:</strong></span>
                    <span class="card-value">{{ $devi->date_devi }}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item mt-3">
                    <span class="card-label"><strong>Totle TTC :</strong></span>
                    <span class="card-value">{{ $devi->totale }}</span>
                  </div>
                </div>  
                <div class="col-md-12">
                  <div class="card-actions mt-4">
                    @if (auth()->check() && auth()->user()->is_admin)
                    <button class="btn btn-success">
                      <a href="{{ route('devis.edit', $devi->id) }}"><span class="material-symbols-outlined">edit</span></a>
                    </button>
                    <form action="{{ route('devis.destroy', $devi->id) }}" style="display: inline-block;" method="post" id="{{ $devi->id }}">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button class="btn btn-danger" onclick="event.preventDefault();
                      if (confirm('Êtes-vous sûr de vouloir supprimer ?'))
                        document.getElementById('{{ $devi->id }}').submit();" type="submit">
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