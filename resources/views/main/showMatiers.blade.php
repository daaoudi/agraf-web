@extends('layout.layouts')

@section('title')
liste des Matieres
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Matieres</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Matieres</li>
      </ol>

    </div>
  </div>

<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de chantiers: {{count($matiers)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom_Fournisseur</th>
                    <th>nom_Projet</th>
                    <th>nom_Article</th>
                    <th>designation</th>
                    <th>prix</th>
                    <th>type</th>
                    <th>qte</th>
                    <th>matiere_unite</th>
                    <th>date_recu</th>
                    <th>nmbr_piece_utiliser</th>
                    <th>action</th>
                </tr>
                @foreach($matiers as $matier)
                <tr>
                    <td>{{$matier->fournisseur->nom}}</td>
                    <td>{{$matier->chantier->designation}}</td>
                    <td>{{$matier->article->designation}}</td>
                    <td>{{$matier->designation}}</td>
                    <td>{{$matier->prix}}</td>
                    <td>{{$matier->type}}</td>
                    <td>{{$matier->qte}}</td>
                    <td>{{$matier->matiere_unite}}</td>
                    <td>{{$matier->date_r}}</td>
                    <td>{{$matier->nmbr_piece_utiliser}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('matiers.edit',$matier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('matiers.destroy',$matier->id)}}" style="display: inline-block;" method="post" id="{{$matier->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$matier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-info"> <a href="{{route('matiers.show',$matier->id)}}"> <span class="material-symbols-outlined">
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