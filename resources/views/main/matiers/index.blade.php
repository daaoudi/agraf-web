@extends('layout.layouts')

@section('title')
liste des Achats des MP
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-2.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Matieres</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Achats des MP</li>
      </ol>

      <a href={{route('matiers.create')}} class="btn btn-warning">
        + Ajouter des Achats des MP
      </a>


    </div>
  </div>

  <div class="container-lg" style="position:relative;top:100px;min-height:992px;">
    <button class="go-back" onclick="history.back();">
      <span class="material-symbols-outlined">
      arrow_back
      </span></button>
      
      <div class="card">
          <div class="card-header">
            @if (session()->has('success'))
            <div class="alert alert-success text-center">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de matiers: {{count($matiers)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  
                  <th>designation</th>
                  <th>prix</th>
                  <th>type</th>
                  <th>qte</th>
                  <th>matiere_unite</th>
                
                  <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($matiers as $matier)
                <tr>
                  
                    <td>{{$matier->designation}}</td>
                    <td>{{$matier->prix}}</td>
                    <td>{{$matier->type}}</td>
                    <td>{{$matier->qte}}</td>
                    <td>{{$matier->matiere_unite}}</td>
                   
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
                        <button title="View" class="btn view"> <a href="{{route('matiers.show',$matier->id)}}"> <span class="material-symbols-outlined">
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