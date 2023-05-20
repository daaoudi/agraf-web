@extends('layout.layouts')
@section('title')
    l'ajout d'un poste Ouvrier.
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
    <div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
        <button class="go-back" onclick="history.back();">
            <span class="material-symbols-outlined">
                arrow_back
            </span></button>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 " data-aos="fade">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posteOuvriers.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <h3 class="text-center">Formulaire de Poste Ouvrier :</h3>
                    <p class="text-center">Remplir tous les champs s'il vous plaît.</p>
                    <div class="row gy-3 ">
                
                        <div class="col-md-12">
                            <label for="devi_id">Projet :</label>
                            <select name="devi_id" class="form-select" required>
                                <option selected disabled>Choisir le projet (devi) :</option>
                                @foreach ($devis as $devi)
                                    <option value="{{ $devi->id }}">{{ $devi->nom_devi }}</option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="col-md-12">
                            <label for="ouvrier_id">Ouvrier :</label>
                            <select name="ouvrier_id" class="form-select" required>
                                <option selected disabled>Choisir l'ouvrier :</option>
                                @foreach ($ouvriers as $ouvrier)
                                    <option value="{{ $ouvrier->id }}">{{ $ouvrier->nom . ' ' . $ouvrier->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                
                
                        <div class="col-md-12">
                            <label for="service_id">Service :</label>
                            <select name="service_id" class="form-select" required>
                                <option selected disabled>Choisir le nom du Service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->nom_service }}</option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="col-md-12">
                            <label for="ouvrage_id">Ouvrage :</label>
                            <select name="ouvrage_id" class="form-select" required>
                                <option selected disabled>Choisir le nom de l'ouvrage</option>
                                @foreach ($ouvrages as $ouvrage)
                                    <option value="{{ $ouvrage->id }}">{{ $ouvrage->designation_ouvrage }}</option>
                                @endforeach
                            </select>
                        </div>
                
                
                        <div class="col-md-12">
                            <label for="poste_ouvrier">Poste d'ouvrier :</label>
                            <input type="text" name="poste_ouvrier" class="form-control" placeholder="Poste d'ouvrier" required>
                        </div>
                
                        <div class="col-md-12">
                            <label for="type">Type :</label>
                            <input type="text" name="type" class="form-control" placeholder="Type" required>
                        </div>
                
                        <div class="col-md-12">
                            <label for="salaire">Salaire :</label>
                            <input type="text" name="salaire" class="form-control" placeholder="Salaire" required>
                        </div>
                
                        <div class="col-md-12">
                            <label for="date_debut">Date de début :</label>
                            <input type="date" name="date_debut" class="form-control" placeholder="Date de début" required>
                        </div>
                
                        <div class="col-md-12">
                            <label for="date_fin">Date de Fin :</label>
                            <input type="date" name="date_fin" class="form-control" placeholder="Date de fin" required>
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
