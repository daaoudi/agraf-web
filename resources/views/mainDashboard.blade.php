@extends('layouts.adminLTE')

@section('content')



    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item my-3">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item my-3 d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item my-3 d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item my-3">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <li class="nav-item my-3">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/storage/assets/img/agraf.png" alt="AGRAF Logo" class="brand-image rounded-1 elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AGRTRAVIS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src={{ Auth::user()->profile_photo_path ? Auth::user()->profile_photo_path : '/storage/assets/img/users/default.jpg' }}
                            class="img-circle elevation-2" alt={{ Auth::user()->name }}>
                    </div>
                    <div class="info d-flex">
                        <a href="/user/profile"> {{ Auth::user()->name }} </a>
                        <a href="{{ url('/logout') }}" class="d-block ml-3">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item my-3">
                            <a href={{ route('devis.index') }} class="nav-link">
                                <img src="storage/icons/devi.png" class="mx-3" class="mx-3" width="45px" />
                                <p>
                                    Devis
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('ouvrages.index') }} class="nav-link">
                                <img src="storage/icons/ouvrage.png" class="mx-3" class="mx-3" width="45px" />
                                <p>
                                    Ouvrages
                                </p>
                            </a>
                        </li>

                        <li class="nav-item my-3">
                            <a href={{ route('matiers.index') }} class="nav-link">
                                <img src="storage/icons/matier.png" class="mx-3" width="45px" />
                                Matieres
                                </p>
                            </a>
                        </li>

                        <li class="nav-item my-3">
                            <a href={{ route('clients.index') }} class="nav-link">
                                <img src="storage/icons/client.png" class="mx-3" width="45px" />
                                <p>
                                    Clients
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('services.index') }} class="nav-link">
                                <img src="storage/icons/services.png" class="mx-3" width="45px" />
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('ouvriers.index') }} class="nav-link">
                                <img src="storage/icons/ouvriers.png" class="mx-3" width="45px" />
                                <p>
                                    Ouvriers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('fournisseurs.index') }} class="nav-link">
                                <img src="storage/icons/fournisseur.png" class="mx-3" width="45px" />
                                <p>
                                    Fournisseurs
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('fournisseurs.index') }} class="nav-link">
                                <img src="storage/icons/fournisseur.png" class="mx-3" width="45px" />
                                <p>
                                    Charges
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('reglements.index') }} class="nav-link">
                                <img src="storage/icons/fournisseur.png" class="mx-3" width="45px" />
                                <p>
                                    Réglements
                                </p>
                            </a>
                        </li>
                        <li class="nav-item my-3">
                            <a href={{ route('posteOuvriers.index') }} class="nav-link">
                                <img src="storage/icons/fournisseur.png" class="mx-3" width="45px" />
                                <p>
                                    Poste Ouvrier
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $chantiersNbr }}</h3>
                                    <p>Projets</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $ouvriersNbr }}</h3>

                                    <p>Ouvriers</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $fournisseursNbr }}</h3>

                                    <p>Fournisseurs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $clientNbr }}</h3>
                                    <p>Clients</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <hr>
                    <h1>Table de revenue</h1>
                    <button id="toggleButton" onclick="toggleTable1()">Afficher/Cacher</button>

                    <div id="tableContainer" class="foldable-table">
                        <table class="table table-striped table-bordered mb-5">
                            <thead>
                                <tr>
                                    <th>Devi</th>
                                    <th>Consommation MOD</th>
                                    <th>Consommation MP</th>
                                    <th>Cout Totale</th>
                                    <th>Resultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($revenue as  $rev)
                                @php
                                $resultat=(floatVal($rev->montant))- ((floatVal($rev->mod)) + (floatVal($rev->mp)));
                                if($resultat < 0){
                                $color="red";
                                }else{
                                $color="green";}
                                @endphp
                                <tr>
                                    <td>{{$rev->nom_devi}}</td>
                                    <td>{{$rev->mod}} </td>
                                    <td>{{$rev->mp}} </td>
                                    <td>{{(floatVal($rev->mod)) + (floatVal($rev->mp))}} DH</td>
                                    <td><h4 style="color:{{$color}}">{{$resultat}} DH</h4></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>

                    <h1>Table d'avancement</h1>
                    <button id="toggleButton" onclick="toggleTable2()">Afficher/Cacher</button>

                    <div class="foldable-table" id="tableContainer2">
                    <table class="table table-striped mt-5">
                        <thead>
                            <tr>
                                <th>Devi(s)</th>
                                <th>Ouvrages(s)</th>
                                <th>Taux d'avancement de projet</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ouvrages as $key => $values)
                                <tr>
                                    <td style="text-align:center;align-items:center;">{{ $key }}</td>
                                    <td>
                                        @php $taux_global=0; @endphp
                                        @foreach ($values as $vals)
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    {{-- <h5 class="card-title mr-2">{{ $vals['designation_ouvrage'] }}</h5> --}}
                                                    <a href={{route('ouvrages.show',$vals['id'])}}><span class="card-text">
                                                        @php $avance=0;$taux_global_actuelle=0; @endphp 
                                                        @if ($vals['etat'] === "pas encore")
                                                        <span class="mt-2" style="color: red; background: rgba(255, 0, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['designation_ouvrage'] }}</span>
                                                    @endif
                                                    
                                                    @if ($vals['etat'] === "en cours")
                                                        <span class="mt-2" style="color: orange; background: rgba(255, 255, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['designation_ouvrage'] }}</span>
                                                    @endif
                                                    
                                                    @if ($vals['etat'] === "complété")
                                                        @php $avance=1;  @endphp
                                                        <span class="mt-2" style="color: green; background: rgba(0, 128, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['designation_ouvrage'] }}</span>
                                                    @endif    
                                                    </span></a>
                                                </div>
                                                <div class="card-body" style="display:none">
                                                    <p class="card-text"><b>Taux d'avancement:</b> 
                                                        {{

                                                             $taux_global_actuelle= number_format(((($vals['qte'] * $vals['prix']) / $vals['totale']) * 100)*$avance, 2)
                                                             
                                                        }}%</p>
                                                </div>
                                            </div>
                                            @php $taux_global = $taux_global + $taux_global_actuelle; @endphp
                                        @endforeach
                                    </td>
                                    <td style="text-align: center;">
                                       <h3> {{$taux_global }} %</h3>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <hr>

                    <hr>
                    <!-- Main row -->
                    {{-- <div class="row">
                        <div class="col-xl-12">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <h1 class="mt-5">Table Globale</h1>
                            @if (count($data) !== 0)
                                <table class="table table-secondary table-striped my-5">
                                    <tr>
                                        <th>Projets</th>
                                        <th>Ouvriers</th>
                                        <th>Ouvrage</th>
                                        <th>Service</th>
                                    </tr>
                                    @foreach ($data as $res)
                                        <tr>
                                            <td>{{ $res->des }}</td>
                                            <td>{{ $res->nom . ' ' . $res->prenom }}</td>
                                            <td>{{ $res->designation }}</td>
                                            <td>{{ $res->nom_service }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <div class="alert alert-danger mt-5">Pour pouvoir voir le tableau global, vous devez
                                    remplir tous les champs
                                    autres tables nécessaires (Chantier, Ouvriers, Article,Service)</div>
                            @endif
                        </div>
                    </div> --}}
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="/">Agrtravis</a>.</strong>
            All rights reserved.

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    
    <script>
        function toggleTable1() {
            const tableContainer = document.getElementById('tableContainer');
            tableContainer.style.display = (tableContainer.style.display === 'none') ? 'block' : 'none';
        }
        function toggleTable2() {
            const tableContainer = document.getElementById('tableContainer2');
            tableContainer.style.display = (tableContainer.style.display === 'none') ? 'block' : 'none';
        }
    </script>
    
    
    <style>
       .foldable-table {
            display: none;
            transition: 0.5s all ease-in;
        }
        #toggleButton{
            background-color: #fff;
            color: #444;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            width: 150px;

        }
    </style>

@endsection




