@extends('layout.layouts')

@section('title')
    liste des Reglements
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Reglements</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Reglements</li>
            </ol>

            <a href={{ route('reglements.create') }} class="btn btn-warning">
                + Ajouter une reglement
            </a>


        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="card-title mb-0">Reglement Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-item">
                                <span class="card-label"><strong>Devi:</strong></span>
                                <span class="card-value">{{ $reglement->devi->nom_devi }}</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Client:</strong></span>
                                <span class="card-value">{{ $reglement->client->nom .' ' . $reglement->client->prenom }}</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Numéro de chèque:</strong></span>
                                <span class="card-value">{{ $reglement->numero_cheque }}</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Montant:</strong></span>
                                <span class="card-value">{{ $reglement->montant }} DH</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Banque:</strong></span>
                                <span class="card-value">{{ $reglement->banque }}</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Mode de paiement:</strong></span>
                                <span class="card-value">{{ $reglement->mode_paiement }}</span>
                            </div>
                            <div class="card-item">
                                <span class="card-label"><strong>Date de règlement:</strong></span>
                                <span class="card-value">{{ $reglement->date_reglement }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if (auth()->check() && auth()->user()->is_admin)
                            <a href="{{ route('reglements.edit', $reglement->id) }}" class="btn btn-primary btn-sm mr-2">
                                <span class="material-symbols-outlined">edit</span> Modifier
                            </a>
                            <form action="{{ route('reglements.destroy', $reglement->id) }}" style="display: inline-block;" method="post" id="{{ $reglement->id }}">
                                @csrf
                                @method('DELETE')
                                <button title="Supprimer" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                                    if(confirm('Vous êtes sûr de vouloir supprimer ?'))
                                    document.getElementById('{{ $reglement->id }}').submit();"
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
