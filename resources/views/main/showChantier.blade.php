@extends('layout.layouts')

@section('title')
le client : {{$chantiers->client->nom}} - projet: {{$chantiers->designation}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/breadcrumbs-bg.jpg');">
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
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom_client</th>
                    <th>designation</th>
                    <th>prix</th>
                    <th>ville</th>
                    <th>mode_paiement</th>
                    <th>action</th>
                </tr>
               
                <tr>
                    <td>{{$chantiers->client->nom}}</td>
                    <td>{{$chantiers->designation}}</td>
                    <td>{{$chantiers->prix}}</td>
                    <td>{{$chantiers->ville}}</td>
                    <td>{{$chantiers->mode_paiement}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('chantiers.edit',$chantiers->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('chantiers.destroy',$chantiers->id)}}" style="display: inline-block;" method="post" id="{{$chantiers->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$chantiers->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        @endif
                        @endif
                       </td>
                </tr>
               
              </table>
        </div>
    </div>
</div>








@endsection