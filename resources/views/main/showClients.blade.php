@extends('layout.layouts')

@section('title')
liste des clients
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Clients</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Clients</li>
      </ol>

    </div>
  </div>
  
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de clients: {{count($clients)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>telephone</th>
                    <th>montant</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->telephone}}</td>
                    <td>{{$client->montant}}</td>
                    <td>{{$client->email}}</td>
                    <td><button title="Modifier" class="btn btn-success"><a href="{{route('clients.edit',$client->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('clients.destroy',$client->id)}}" style="display: inline-block;" method="post" id="{{$client->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$client->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-info"> <a href="{{route('clients.show',$client->id)}}"> <span class="material-symbols-outlined">
                            visibility
                            </span></a></button></td>
                </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>








@endsection