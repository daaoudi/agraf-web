@extends('layout.layouts')
@section('title')
    l'ajout d'un Ouvrier.
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/features-4.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Ouvriers</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Ouvriers</li>
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

                <form action="{{ route('ouvriers.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <h3 class="text-center">Formulaire de Ouvrier :</h3>
                    <p class="text-center">Remplir tous les champs s'il vous plaît.</p>
                    <div class="row gy-3 ">
                        <div class="col-md-12">
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                
                        <div class="col-md-12">
                            <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom" >
                        </div>
                
                        <div class="col-md-12">
                            <label for="telephone">Téléphone :</label>
                            <input type="text" name="telephone" class="form-control" placeholder="Téléphone" >
                        </div>
                
                        <div class="col-md-12">
                            <label for="cin">CIN :</label>
                            <input type="text" name="cin" class="form-control" placeholder="CIN" >
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
