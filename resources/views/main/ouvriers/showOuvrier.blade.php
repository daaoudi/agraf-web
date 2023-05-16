@extends('layout.layouts')

@section('title')
  Ouvrier : {{$ouvrier->nom .'  ' . $ouvrier->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Ouvrier</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Ouvrier</li>
      </ol>

    </div>
  </div>
  
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
   
  <button class="go-back" onclick="history.back();">
    <span class="material-symbols-outlined">
    arrow_back
    </span></button><div class="row">
      
        <div class="col-xl-12">
            
            
            <table class="table table-secondary table-striped">
                <tr>
                   
                    <th>nom</th>
                    <th>prenom</th>
                    <th>telephone</th>
                    <th>cin</th>
                    <th>type</th>
                    <th>Date_Debut</th>
                    <th>Date_Fin</th>
                    <th>salaire_par_semaine</th>
                    <th>action</th>
                </tr>
               
                <tr>
                   
                    <td>{{$ouvrier->nom}}</td>
                    <td>{{$ouvrier->prenom}}</td>
                    <td>{{$ouvrier->telephone}}</td>
                    <td>{{$ouvrier->cin}}</td>
                    <td>{{$ouvrier->type}}</td>
                    <td>{{$ouvrier->date_debut}}</td>
                    <td>{{$ouvrier->date_fin}}</td>
                    <td>{{$ouvrier->salaire_par_semaine}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('ouvriers.edit',$ouvrier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('ouvriers.destroy',$ouvrier->id)}}" style="display: inline-block;" method="post" id="{{$ouvrier->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$ouvrier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        @else
                        <span style="color:red;"> vous n'êtes pas l'accès pour les actions !</span>
                        @endif
                        @endif
                        </td>
                </tr>
               
              </table>
        </div>
    </div>
</div>








@endsection