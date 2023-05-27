@extends('layout.layouts')

@section('title')
    liste des Ouvriers
@endsection

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Ouvriers</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Poste Ouvriers</li>
            </ol>

            <a href={{ route('posteOuvriers.create') }} class="btn btn-warning">
                + Ajouter un poste
            </a>


        </div>
    </div>

    <div class="container-fluid" style="position:relative;top:50px;min-height:768px;">
        <button class="go-back" onclick="history.back();">
            <span class="material-symbols-outlined">
                arrow_back
            </span></button>

        <div class="card">
            <div class="card-header">
                @if (session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Ouvrier</th>
                            <th>Projet</th>
                            <th>Service</th>
                            <th>type</th>
                            <th>Date_Debut</th>
                            <th>Date_Fin</th>
                            <th>salaire</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posteOuvriers as $ouvrier)
                            <tr>
                                <td>{{ $ouvrier->ouvrier->nom .' '. $ouvrier->ouvrier->prenom}}</td>
                                <td>{{ $ouvrier->devi->nom_devi}}</td>
                                <td>{{ $ouvrier->service->description}}</td>
                                <td>{{ $ouvrier->type }}</td>
                                <td>{{ $ouvrier->date_debut }}</td>
                                <td>{{ $ouvrier->date_fin }}</td>
                                <td>{{ $ouvrier->salaire }} DH</td>
                                <td>
                                    @if (auth()->check())
                                        @if (auth()->user()->is_admin)
                                            <button title="Modifier" class="btn btn-primary btn-sm"><a
                                                    href="{{ route('posteOuvriers.edit', $ouvrier->id) }}"><span
                                                        class="material-symbols-outlined">
                                                        edit
                                                    </span></a></button>
                                            <form action="{{ route('posteOuvriers.destroy', $ouvrier->id) }}"
                                                style="display: inline-block;" method="post" id="{{ $ouvrier->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button title="Supprimer" class="btn btn-danger btn-sm"
                                                onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{ $ouvrier->id }}').submit();"
                                                type="submit"><span class="material-symbols-outlined">
                                                    delete
                                                </span> </button>
                                            <button title="View" class="btn btn-secondary btn-sm view"> <a
                                                    href="{{ route('posteOuvriers.show', $ouvrier->id) }}"> <span
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
        </div>
    @endsection
