@extends('layout.layouts')
@section('title')
    l'edit d'un poste ouvrier.
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/storage/assets/img/features-4.jpg');">

        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Poste Ouvrier</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Poste Ouvrier</li>
            </ol>

        </div>
    </div>
    <div class="container-lg" style="position:relative;top:100px;min-height:992px;">
        <button class="go-back" onclick="history.back();">
            <span class="material-symbols-outlined">
                arrow_back
            </span></button>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 " data-aos="fade">
                @if ($errors->any())
                    <div class="alert alert-danger text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('posteOuvriers.update', $posteOuvrier->id) }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center">Modifier Poste Ouvrier :</h3>
                    <p class="text-center">Modifiez tous les champs s'il vous plaît.</p>
                    <div class="row gy-3 ">

    

                        <div class="col-md-12">
                            <label for="ouvrier_id">Ouvrier :</label>
                            <select name="ouvrier_id" class="form-select" >
                                <option disabled>Choisir l'ouvrier :</option>
                                @foreach ($ouvriers as $ouvrier)
                                    <option value="{{ $ouvrier->id }}"
                                        {{ $posteOuvrier->ouvrier_id == $ouvrier->id ? 'selected' : '' }}>
                                        {{ $ouvrier->nom . ' ' . $ouvrier->prenom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="service_id">Service :</label>
                            <select name="service_id" class="form-select" >
                                <option disabled>Choisir le nom du service :</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ $posteOuvrier->service_id == $service->id ? 'selected' : '' }}>
                                        {{ $service->nom_service }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="poste_ouvrier">Poste d'ouvrier :</label>
                            <input type="text" name="poste_ouvrier" class="form-control" placeholder="Poste d'ouvrier"
                                value="{{ $posteOuvrier->poste_ouvrier }}" >
                        </div>

                        <div class="col-md-12">
                            <label for="type">Type :</label>
                            <input type="text" name="type" class="form-control" placeholder="Type"
                                value="{{ $posteOuvrier->type }}" >
                        </div>

                        <div class="col-md-12">
                            <label for="salaire">Salaire :</label>
                            <input type="text" name="salaire" class="form-control" placeholder="Salaire"
                                value="{{ $posteOuvrier->salaire }}" >
                        </div>

                        <div class="col-md-12">
                            <label for="date_debut">Date de début :</label>
                            <input type="date" name="date_debut" class="form-control" placeholder="Date de début"
                                value="{{ $posteOuvrier->date_debut }}" >
                        </div>

                        <div class="col-md-12">
                            <label for="date_fin">Date de fin :</label>
                            <input type="date" name="date_fin" class="form-control" placeholder="Date de fin"
                                value="{{ $posteOuvrier->date_fin }}" >
                        </div>

                        @livewire('article-selection', ['devis' => $devis])


                        <div class="col-md-12 text-center">
                            <button class="btn btn-warning" type="submit">Modifier</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
