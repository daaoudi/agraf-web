@extends('layout.layouts')

@section('title')
liste des Reglements
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/design-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Reglements</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Reglements</li>
      </ol>

      <a href={{route('reglements.create')}} class="btn btn-warning">
        + Ajouter une reglement
      </a>


    </div>
  </div>

  <div class="container-xxl" style="position:relative;top:100px;min-height:768px;">
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
            <h4>Nombre de matiers: {{count($reglements)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Projet</th>
                  <th>client</th>
                  <th>numero_cheque</th>
                  <th>montant</th>
                  <th>banque</th>
                  <th>mode_paiement</th>
               <th>date_reglement</th>
                
                  <th>action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($reglements as $reglement)
                <tr>
                  
                    <td>{{$reglement->devi->nom_devi}}</td>
                    <td>{{$reglement->client->nom .' ' . $reglement->client->prenom}}</td>
                    <td>{{$reglement->numero_cheque}}</td>
                    <td>{{$reglement->montant}} DH</td>
                    <td>{{$reglement->banque}}</td>
                    <td>{{$reglement->mode_paiement}}</td>
                    <td>{{$reglement->date_reglement}}</td>
                   
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-primary btn-sm"><a href="{{route('reglements.edit',$reglement->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('reglements.destroy',$reglement->id)}}" style="display: inline-block;" method="post" id="{{$reglement->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$reglement->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-secondary btn-sm"> <a href="{{route('reglements.show',$reglement->id)}}"> <span class="material-symbols-outlined">
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