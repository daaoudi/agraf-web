@extends('layout.layouts')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Devis</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Devis</li>
      </ol>

    </div>
  </div>
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <button class="go-back" onclick="history.back();">
        <span class="material-symbols-outlined">
        arrow_back
        </span></button>
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            
            <table class="table table-secondary table-striped">
                <tr>
                    <th>Designation</th>
                    <th>Qte</th>
                    <th>Unité</th>
                    <th>Prix HT</th>
                    <th>Taux d'avancement</th>
                    <th>Total HT</th>
                    <th>Actions</th>
                </tr>
                
                <tr>
                    <td>{{$devi->designation_ouvrages}}</td>
                    <td>{{$devi->qte}}</td>
                    <td>{{$devi->unite}}</td>
                    <td>{{$devi->prix_unitaire}}</td>
                    <td>{{$devi->taux_avancement}}%</td>
                    <td>{{$devi->totale_HT}}DH</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('devis.edit',$devi->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('devis.destroy',$devi->id)}}" style="display: inline-block;" method="post" id="{{$devi->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" 
                        onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$devi->id}}').submit();" type="submit">
                        <span class="material-symbols-outlined">
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