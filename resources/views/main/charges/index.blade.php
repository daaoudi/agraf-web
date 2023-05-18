@extends('layout.layouts')

@section('title')
liste des charges
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Charges</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Charges</li>
      </ol>

      <a href={{route('charges.create')}} class="btn btn-warning">
        + Ajouter une charge
      </a>


    </div>
  </div>

  <div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
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
            <h4>Nombre des charges: {{count($charges)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Devi</th>
                  <th>fournisseur</th>
                  <th>matier</th>
                  <th>MOD</th>
                  <th>MP</th>
                  <th>montant_charges_matier</th>
                  <th>montant_credit</th>
                  <th>mode_paiement</th>
                  <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                @foreach($charges as $charge)
                <tr>
                    <td>{{$charge->devi->nom_devi}}</td>
                    <td>{{$charge->fournisseur->nom .' ' . $charge->fournisseur->prenom}} </td>
                    <td>{{$charge->matier->designation}}</td>
                    <td>{{$charge->mod}}</td>
                    <td>{{$charge->mp}}</td>
                    <td>{{$charge->montant_charges_matier}}DH</td>
                    <td>{{$charge->montant_credit}}DH</td>
                    <td>{{$charge->mode_paiement}}</td>
                    
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('charges.edit',$charge->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('charges.destroy',$charge->id)}}" style="display: inline-block;" method="post" id="{{$charge->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$charge->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn view"> <a href="{{route('charges.show',$charge->id)}}"> <span class="material-symbols-outlined">
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