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
            <h4>Nombre d'articles: {{count($requests)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom_service</th>
                    <th>nom_ouvrier</th>
                    <th>prenom_ouvrier</th>
                    <th>designation</th>
                    <th>description</th>
                    <th>article_unite</th>
                    
                    <th>action</th>
                </tr>
                @foreach($requests as $request)
                <tr>
                    <td>{{$request->service->nom_service}}</td>
                    <td>{{$request->ouvrier->nom}}</td>
                    <td>{{$request->ouvrier->prenom}}</td>
                    <td>{{$request->designation}}</td>
                    <td>{{Str::limit($request->description,25)}}</td>
                    <td>{{$request->article_unite}}</td>
                    
                    <td>
                        @if(auth()->check())
                        @if(auth()->user()->is_admin)
                        <button title="Modifier" class="btn btn-success"><a href="{{route('articles.edit',$request->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('articles.destroy',$request->id)}}" style="display: inline-block;" method="post" id="{{$request->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$request->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-info"> <a href="{{route('articles.show',$request->id)}}"> <span class="material-symbols-outlined">
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