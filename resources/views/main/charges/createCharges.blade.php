@extends('layout.layouts')
@section('title')
l'ajout des charges.
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center " style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Matieres</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Matieres</li>
      </ol>
  
    </div>
  </div>

  <div class="container-fluid my-5" style="position:relative;top:50px;min-height:1200px;">
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
  
        <form action="{{route('charges.store')}}" enctype="multipart/form-data" method="post">
          @csrf
          <h3 class="text-center">Formulaire des charges :</h3>
          <p class="text-center">Modifier les champs s'il vous plaît.</p>
          <div class="row gy-3 ">
              
                      <div class="col-md-12">
                          <label for="designation">Designation :</label>
                          <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="{{old('desination')}}">
                      </div>
              
              <div class="col-md-12">
                  <label for="prix">Prix :</label>
                  <input type="text" name="prix" id="prix" class="form-control" placeholder="prix" value="{{old('prix')}}">
              </div>
              <div class="col-md-12">
                  <label for="qte">Quantite :</label>
                  <input type="text" name="qte" id="qte" class="form-control" placeholder="Quantite" value="{{old('Quantite')}}">
              </div>
              <div class="col-md-12">
                  <label for="unite">Unité d'achat :</label>
                  <input type="text" name="unite" id="unite" class="form-control" placeholder="Unite" value="{{old('unite')}}">
              </div>

              <div class="col-md-12">
                  <label for="date_charge">Date de charge :</label>
                  <input type="date" id="date_charge" name="date" class="form-control" value="{{old('date_charge')}}">
              </div>
      
              <div class="col-md-12">
                  <label for="mode_paiement">Mode de paiement :</label>
                  <select name="mode_paiement" id="mode_paiement" class="form-select">
                      <option selected disabled>Choisir le mode de paiement</option>
                      <option value="cheque">Chèque</option>
                      <option value="crédit">Crédit</option>
                      <option value="espece">Espèce</option>
                  </select>
              </div>
      

      
              <div class="col-md-12">
                  <label for="fournisseur_id">Fournisseur :</label>
                  <select name="fournisseur_id" id="fournisseur_id" class="form-select">
                      <option selected disabled>Choisir le nom du fournisseur</option>
                      @foreach($fournisseurs as $fournisseur)
                      <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                      @endforeach
                  </select>
              </div>

              {{-- <div class="col-md-12">
                @livewire('project-article-form')
            </div> --}}
            <div class="form-group">
                <label for="project">Select a Project:</label>
                <select wire:model="projectId" name="devi_id" class="form-control" onchange="fetchArticles()">
                    <option value="">Select Project</option>
                    @foreach($devis as $project)
                        <option value="{{ $project->id }}">{{ $project->nom_devi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="article_select">Article:</label>
                <select name="ouvrage_id" id="article_select" class="form-select">
                        <!-- Options will be dynamically populated using AJAX -->
                        {{-- <option value="">vvvv</option>
                        @foreach ($articles as $art )
                            <option value="{{$art->id}} ">{{$art->designation_ouvrage}} </option>
                        @endforeach --}}
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
  <script>
function fetchArticles() {
        var projectId = $('select[name="devi_id"]').val();

        // Perform an AJAX request to fetch articles based on the selected project
        $.ajax({
            url: '/get-articles', // Replace with the actual URL to fetch articles
            type: 'GET',
            data: {
                devi_id: projectId
            },
            success: function(response) {
                // Handle the response and update the articles dropdown or perform any other actions
                // Example: Update the articles dropdown based on the response
                var articlesDropdown = $('select[name="ouvrage_id"]');
                articlesDropdown.empty();
                articlesDropdown.append('<option value="">Select Article</option>');

                $.each(response.articles, function(index, article) {
                    articlesDropdown.append('<option value="' + article.id + '">' + article.designation_ouvrage + '</option>');
                });
            },
            error: function(xhr) {
                // Handle the error response
                console.log(xhr.responseText);
            }
        });
    }
    </script>
@endsection