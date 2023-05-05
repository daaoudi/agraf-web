@extends('layout.layouts')

@section('title')
liste des chantiers
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Projets</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Projets</li>
      </ol>

      <a href={{route('chantiers.create')}} class="btn btn-warning">
        + Ajouter un chantier
      </a>


    </div>
  </div>

  <div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
    <button class="go-back" onclick="history.back();">
      <span class="material-symbols-outlined">
      arrow_back
      </span></button>
      
      <div class="card">
          <div class="card-header">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de projets: {{count($chantiers)}}</h4>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nom de Client</th>
                  <th>Nom de Projet</th>
                  <th>prix</th>
                  <th>ville</th>
                  <th>mode de paiement</th>
                  <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($chantiers as $chantier)
                <tr>
                    <td>{{$chantier->client->nom}}</td>
                    <td>{{$chantier->designation}}</td>
                    <td>{{$chantier->prix}}</td>
                    <td>{{$chantier->ville}}</td>
                    <td>{{$chantier->mode_paiement}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('chantiers.edit',$chantier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('chantiers.destroy',$chantier->id)}}" style="display: inline-block;" method="post" id="{{$chantier->id}}">
                        @csrf
                        @method('DELETE')
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$chantier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn go-back"> <a href="{{route('chantiers.show',$chantier->id)}}"> <span class="material-symbols-outlined">
                            visibility
                            </span></a></button>
                            @else
                            <span style="color:red;"> vous n'êtes pas l'accès pour les actions !</span>
                          @endif
                          @endif
                          </td>
                </tr>
                @endforeach
            </table>
          </div>
          </div>
          </div>








@endsection
