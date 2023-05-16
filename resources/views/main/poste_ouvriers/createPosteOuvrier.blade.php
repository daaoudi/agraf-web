@extends('layout.layouts')
@section('title')
    l'ajout d'un Ouvrier.
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
                    <p class="text-center">Remplir tout les Champs s'il vous plait. </p>
                    <div class="row gy-3 ">

                        <div class="col-md-12">
                            <label for="devi_id">Projet : </label>
                            <select name="devi_id" class="form-select" required>
                                <option selected>Choisir l'ouvrier : </option>
                                @foreach ($devis as $devi)
                                    <option value="{{ $devi->id }}">{{ $devi->nom_devi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="ouvrier_id">ouvrier : </label>
                            <select name="ouvrier_id" class="form-select" required>
                                <option selected>Choisir l'ouvrier : </option>
                                @foreach ($ouvriers as $ouvrier)
                                    <option value="{{ $ouvrier->id }}">{{ $ouvrier->nom . ' ' . $ouvrier->prenom }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-12">
                            <label for="service_id">Service : </label>
                            <select name="service_id" class="form-select" required>
                                <option selected>Choisir le nom de Service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->designation }}</option>
                                @endforeach
                            </select>
                        </div>

           
                        <div class="col-md-12">
                            <label for="poste ouvrier">Poste d'ouvrier : </label>
                            <input type="text" name="poste ouvrier" class="form-control" placeholder="poste ouvrier"
                                required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="type" class="form-control" placeholder="type" required>
                        </div>

                        <div class="col-md-12">
                            <label for="salaire">salaire</label>
                            <input type="text" name="salaire" class="form-control" placeholder="salaire" required>
                        </div>

                        <div class="col-md-12">
                            <label for="date_debut">Date de début : </label>
                            <input type="date" name="date_debut" class="form-control" placeholder="date_debut" required>
                        </div>

                        <div class="col-md-12">
                            <label for="date_fin">Date de Fin : </label>
                            <input type="date" name="date_fin" class="form-control" placeholder="date_fin" required>
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
