@extends('layout.layouts')

@section('title')
{{$clients->nom .''. $clients->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Clients</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Clients</li>
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
                    <th>nom</th>
                    <th>prenom</th>
                    <th>telephone</th>
                    <th>montant</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
                
                <tr>
                    <td>{{$clients->nom}}</td>
                    <td>{{$clients->prenom}}</td>
                    <td>{{$clients->telephone}}</td>
                    <td>{{$clients->montant}}</td>
                    <td>{{$clients->email}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('clients.edit',$clients->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('clients.destroy',$clients->id)}}" style="display: inline-block;" method="post" id="{{$clients->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$clients->id}}').submit();" type="submit"><span class="material-symbols-outlined">
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