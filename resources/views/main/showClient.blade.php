@extends('layout.layouts')

@section('title')
{{$clients->nom .''. $clients->prenom}}
@endsection

@section('content')
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
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
                    <td><button title="Modifier" class="btn btn-success"><a href="{{route('clients.edit',$clients->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('clients.destroy',$clients->id)}}" style="display: inline-block;" method="post" id="{{$clients->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$clients->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        </td>
                </tr>
               
              </table>
        </div>
    </div>
</div>








@endsection