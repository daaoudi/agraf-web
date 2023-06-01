@extends('layout.layouts')

@section('title')
liste des Ouvriers
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

      <a href={{route('ouvriers.create')}} class="btn btn-warning">
        + Ajouter un ouvrier
      </a>


    </div>
  </div>
  
  <div class="container-lg" style="position:relative;top:100px;min-height:768px;">
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
            <h4>Nombre d'ouvriers: {{count($ouvriers)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>telephone</th>
                  <th>cin</th>
                  <th>action</th>
              </tr>
                </thead>
              <tbody>
                @foreach($ouvriers as $ouvrier)
                <tr>
                    <td>{{$ouvrier->nom}}</td>
                    <td>{{$ouvrier->prenom}}</td>
                    <td>{{$ouvrier->telephone}}</td>
                    <td>{{$ouvrier->cin}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-primary btn-sm"><a href="{{route('ouvriers.edit',$ouvrier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('ouvriers.destroy',$ouvrier->id)}}" style="display: inline-block;" method="post" id="{{$ouvrier->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$ouvrier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-secondary btn-sm view"> <a href="{{route('ouvriers.show',$ouvrier->id)}}"> <span class="material-symbols-outlined">
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
          <!-- /.card-body -->
        </div>
  







@endsection