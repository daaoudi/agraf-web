@extends('layout.layouts')

@section('title')
liste des Articles
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Articles</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Articles</li>
      </ol>

      <a href={{route('articles.create')}} class="btn btn-warning">
        + Ajouter un article
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
            <h4>Nombre des Articles: {{count($articles)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>nom_service</th>
                  <th>nom_ouvrier</th>
                  <th>prenom_ouvrier</th>
                  <th>Etat_Avancement</th>
                  <th>designation</th>
                  <th>description</th>
                  <th>article_unite</th>
                  <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{$article->service->nom_service}}</td>
                    <td>{{$article->ouvrier->nom}}</td>
                    <td>{{$article->ouvrier->prenom}}</td>
                    <td>{{$article->chantier->etat_avancement}}</td>
                    <td>{{$article->designation}}</td>
                    <td>{{Str::limit($article->description,50)}}</td>
                 
                    <td>{{$article->article_unite}}</td>
                    
                    <td>
                        @if(auth()->check())
                        @if(auth()->user()->is_admin)
                        <button title="Modifier" class="btn btn-success"><a href="{{route('articles.edit',$article->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('articles.destroy',$article->id)}}" style="display: inline-block;" method="post" id="{{$article->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$article->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn view"> <a href="{{route('articles.show',$article->id)}}"> <span class="material-symbols-outlined">
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