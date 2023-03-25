@extends('layout.layouts')

@section('title')
liste des chantiers
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
            <h4>Nombre de chantiers: {{count($chantiers)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom_client</th>
                    <th>designation</th>
                    <th>prix</th>
                    <th>ville</th>
                    <th>mode_paiement</th>
                    <th>action</th>
                </tr>
                @foreach($chantiers as $chantier)
                <tr>
                    <td>{{$chantier->client->nom}}</td>
                    <td>{{$chantier->designation}}</td>
                    <td>{{$chantier->prix}}</td>
                    <td>{{$chantier->ville}}</td>
                    <td>{{$chantier->mode_paiement}}</td>
                    <td><button title="Modifier" class="btn btn-success"><a href="{{route('chantiers.edit',$chantier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('chantiers.destroy',$chantier->id)}}" style="display: inline-block;" method="post" id="{{$chantier->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$chantier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-info"> <a href="{{route('chantiers.show',$chantier->id)}}"> <span class="material-symbols-outlined">
                            visibility
                            </span></a></button></td>
                </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>








@endsection