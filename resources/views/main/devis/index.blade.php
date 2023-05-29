@extends('layout.layouts')

@section('title')
    liste des Devis
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Devis</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Devis</li>
            </ol>

            <a href={{ route('devis.create') }} class="btn btn-warning">
                + Ajouter un devi
            </a>


        </div>
    </div>
    <div class="container-md" style="position:relative;top:50px;min-height:1200px;">
<button class="go-back" onclick="history.back();">
        <span class="material-symbols-outlined">
        arrow_back
        </span></button>
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">Liste des Devis</h3>
            @if (session()->has('success'))
            <div class="alert alert-success text-center">
             {{session()->get('success')}}
            </div>
            @endif
           
        </div>
        <h4>Nombre de fournisseurs: {{count($devis)}}</h4>        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Date de devi</th>
                        <th>Numero de devi </th>
                        <th>Totale TTC </th>
                        <th>PDF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devis as $groupedDevisi)
                        <tr>
                            <td>{{ $groupedDevisi->nom_devi }}</td>
                            <td>{{ $groupedDevisi->date_devi }}</td>
                            <td>{{ $groupedDevisi->numero_devi }}</td>
                            <td>{{ $groupedDevisi->totale }} DH</td>
                            <td style="text-align: center;">
                                @if(!empty($groupedDevisi->document))
                                <img src="storage/icons/download.png" class="mx-3" width="25px" />
                                <a style="color:tomato;" href="{{ asset('/uploads/devis_docs/' . $groupedDevisi->document) }}" download>Download Document</a>
                                @else
                                   <small><i>il n'a pas de document</i></small>
                                @endif
                            </td>
                                                        <td>
                                @if (auth()->check())
                                    @if (auth()->user()->is_admin)
                                        <button title="Modifier" class="btn btn-primary btn-sm"><a
                                                href="{{ route('devis.edit', $groupedDevisi->id) }}"><span
                                                    class="material-symbols-outlined" style="color:whitesmoke;">
                                                    edit
                                                </span></a></button>
                                        <form action="{{ route('devis.destroy', $groupedDevisi->id) }}"
                                            style="display: inline-block;" method="post" id="{{ $groupedDevisi->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <button title="Supprimer" class="btn btn-danger btn-sm"
                                            onclick="event.preventDefault();
                  if(confirm('vous êtes sure pour la suppression ?'))
                  document.getElementById('{{ $groupedDevisi->id }}').submit();"
                                            type="submit"><span class="material-symbols-outlined">
                                                delete
                                            </span> </button>
                                        <button title="View" class="btn btn-secondary btn-sm view"> <a
                                                href="{{ route('devis.show', $groupedDevisi->id) }}"> <span
                                                    class="material-symbols-outlined">
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
        <!-- /.card-body -->
        <div class="card-body my-5">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Date Projet</th>
                        <th>articles</th>
                        <th>prix</th>
                        <th>qte</th>
                        <th>Total HT</th>
                        <th>Somme Total</th>
                        <th>Total TVA 20%</th>
                        <th>Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if (is_array($groupedDevis) || is_object($groupedDevis))
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($groupedDevis as $dev)
                    @foreach ($dev as $de)
                        
                            <tr>
                                <td>{{ $de->nom_devi }}</td>
                                <td>{{ $de->date_devi }}</td>
                                <td>{{$de->designation_ouvrage}} </td>
                                <td>{{$de->prix}} </td>
                                <td>{{$de->qte}} </td>
                                <td>
                                    {{ $de->prix * $de->qte }}
                                </td>
                               
                            </tr>
                            @php
            $total += $de->prix * $de->qte;
        @endphp 
       
        @endforeach
        <tr>
            <td colspan="3">Total: {{ $total }}</td>
        </tr>
                       
                    @endforeach
                @endif
                

                  
                        
                   
               
              
               
                 
                </tbody>
            </table>
        </div>
    </div>
    </div>
   
    
@endsection
