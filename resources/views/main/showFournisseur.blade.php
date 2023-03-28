@extends('layout.layouts')

@section('title')
{{$fournisseur->nom .' '. $fournisseur->prenom}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>fournisseurs</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>fournisseurs</li>
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
                    <th>montant_en_avance</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
                
                <tr>
                    <td>{{$fournisseur->nom}}</td>
                    <td>{{$fournisseur->prenom}}</td>
                    <td>{{$fournisseur->telephone}}</td>
                    <td>{{$fournisseur->montant}}</td>
                    <td>{{$fournisseur->montant_en_avance}}</td>
                    <td>{{$fournisseur->email}}</td>
                    <td><button title="Modifier" class="btn btn-success"><a href="{{route('fournisseurs.edit',$fournisseur->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('fournisseurs.destroy',$fournisseur->id)}}" style="display: inline-block;" method="post" id="{{$fournisseur->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$fournisseur->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        </td>
                </tr>
               
              </table>
        </div>
    </div>
</div>








@endsection