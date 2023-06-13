@extends('layout.layouts')
@section('title')
    la modification d'un Projet :
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/storage/assets/img/constructions-3.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Projet</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Projet</li>
            </ol>

        </div>
    </div>
    <div class="container-lg" style="position:relative;top:100px;min-height:992px;">
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

                <form action="{{ route('devis.update', $devi->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-dark">Formulaire de devis:</h3>
                    <button class="go-back" onclick="history.back();">
                      <span class="material-symbols-outlined">arrow_back</span>
                    </button>
                    <div class="row gy-3">
                  
                      <div class="col-md-12">
                        <label for="doc">Devis (facultatif):</label>
                        <input type="file" name="doc" id="doc" class="form-control">
                      </div>
                  
                      <br>
                      <hr>
                      <br>
                  
                      <div class="col-md-12">
                        <label for="nom_devi">Nom de devis:</label>
                        <input type="text" name="nom_devi" id="nom_devi" class="form-control" value="{{ $devi->nom_devi }}" >
                      </div>
                  
                      <div class="col-md-12">
                        <label for="date_devi">Date de devis:</label>
                        <input type="date" name="date_devi" id="date_devi" class="form-control" value="{{ $devi->date_devi }}" >
                      </div>
                  
                      <div class="col-md-12">
                        <label for="numero_devi">Numéro de devis:</label>
                        <input type="text" name="numero_devi" id="numero_devi" class="form-control" value="{{ $devi->numero_devi }}" >
                      </div>
                  
                    
                  
                      <div class="col-md-12 text-center">
                        <button class="btn btn-warning" type="submit">Modifier</button>
                      </div>
                  
                    </div>
                  </form>
                  

            </div>

        </div>
    </div>











@endsection
