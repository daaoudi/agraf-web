@extends('layout.layouts')

@section('title')
  Poste Ouvrier
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Poste Ouvrier</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Poste Ouvrier</li>
      </ol>


    </div>
  </div>

  
<div class="container my-5">
  <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Projet :</strong> {{ $posteOuvrier->devi->nom_devi }}</p>
                {{-- <p><strong>Ouvrages :</strong></p>
                <ul>
                    @foreach ($posteOuvrier->ouvrages as $ouvrage)
                        <li>{{ $ouvrage->designation_ouvrage }}</li>
                    @endforeach
                </ul> --}}
                                <p><strong>Ouvrier :</strong> {{ $posteOuvrier->ouvrier->nom }} {{ $posteOuvrier->ouvrier->prenom }}</p>
                <p><strong>Service :</strong> {{ $posteOuvrier->service->nom_service }}</p>
                <p><strong>Poste d'ouvrier :</strong> {{ $posteOuvrier->poste_ouvrier }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Type :</strong> {{ $posteOuvrier->type }}</p>
                <p><strong>Salaire :</strong> {{ $posteOuvrier->salaire }}</p>
                <p><strong>Date de début :</strong> {{ $posteOuvrier->date_debut }}</p>
                <p><strong>Date de fin :</strong> {{ $posteOuvrier->date_fin }}</p>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('posteOuvriers.edit', $posteOuvrier->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('posteOuvriers.destroy', $posteOuvrier->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce poste ouvrier ?')">Supprimer</button>
            </form>
        </div>
    </div>
</div>
</div>








@endsection