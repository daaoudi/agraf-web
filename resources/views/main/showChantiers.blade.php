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

    </div>
  </div>

<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <div style="position:absolute;right:40px;"><a class="btn btn-warning" href="/chantiers/create">+ Ajouter un chantier</a></div>
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de chantiers: {{count($chantiers)}}</h4>
            <table class="table table-secondary table-striped my-5">
                <tr>
                    <th>nom_client</th>
                    <th>designation</th>
                    <th>prix</th>
                    <th>ville</th>
                    <th>mode_paiement</th>
                    <th>etat_avancement</th>
                    <th>action</th>
                </tr>
                @foreach($chantiers as $chantier)
                <tr>
                    <td>{{$chantier->client->nom}}</td>
                    <td>{{$chantier->designation}}</td>
                    <td>{{$chantier->prix}}</td>
                    <td>{{$chantier->ville}}</td>
                    <td>{{$chantier->mode_paiement}}</td>
                    <td>{{$chantier->etat_avancement}}</td>
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
                        <button title="View" class="btn btn-info"> <a href="{{route('chantiers.show',$chantier->id)}}"> <span class="material-symbols-outlined">
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
