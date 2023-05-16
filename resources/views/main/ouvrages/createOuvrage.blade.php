@extends('layout.layouts')
@section('title')
    l'ajout d'un ouvrage.
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Ouvrage</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Ouvrage</li>
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

                <form action="{{ route('ouvrages.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <h3 class="text-center">Formulaire d'ouvrage :</h3>
                    <p class="text-center">Remplir tout les champs s'il vous plait. </p>
                    <div class="row gy-3 ">

                        <div class="col-md-12">
                            <label for="designation">designation</label>
                            <input type="text" name="designation" class="form-control" value="{{ old('designation') }}"
                                placeholder="Designation" required>
                        </div>

                        <div class="col-md-12">
                            <label for="prix unitaire">prix unitaire</label>
                            <input type="text" name="prix_unitaire" class="form-control"
                                value="{{ old('prix_unitaire') }}" placeholder="Prix Unitaire" required>
                        </div>

                        <div class="col-md-12">
                        <label for="qte">quantité</label>
                            <input type="text" name="qte" class="form-control" value="{{ old('qte') }}"
                                placeholder="quantité" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="unite" class="form-control" value="{{ old('unite') }}"
                                placeholder="unité" required>
                        </div>
                        <div class="col-md-12">
                            <label for="devi_id">devi</label>
                            <select name="devi_id" id="">
                                <option selected disabled>Choisir le nom de devi</option>
                                @foreach ($devis as $devi)
                                    <option value="{{$devi->id}}" @if($devi->id === old('devi_id')) selected @endif>{{$devi->nom_devi}}</option>
                                @endforeach
                            </select>
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
