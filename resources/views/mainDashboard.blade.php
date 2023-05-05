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
                        <a href="/user/profile mx-2"> {{ Auth::user()->name }} </a>
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
                            <a href={{ route('chantiers.index') }} class="nav-link">
                                <img src="storage/icons/projets.png" class="mx-3" class="mx-3" width="45px" />
                                <p>
                                    Projets
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
                            <a href={{ route('articles.index') }} class="nav-link">
                                <img src="storage/icons/article.png" class="mx-3" width="45px" />
                                <p>
                                    Articles
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Devi(s)</th>
                                <th>Ouvrages(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ouvrages as $key => $values)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        @foreach ($values as $vals)
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <h5 class="card-title">{{ $vals['designation_ouvrage'] }}</h5>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text"><b>Etat:</b> 
                                                        @if ($vals['etat'] === "pas encore")
                                                        <span class="mt-2" style="color: red; background: rgba(255, 0, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['etat'] }}</span>
                                                    @endif
                                                    
                                                    @if ($vals['etat'] === "en cours")
                                                        <span class="mt-2" style="color: orange; background: rgba(255, 255, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['etat'] }}</span>
                                                    @endif
                                                    
                                                    @if ($vals['etat'] === "complété")
                                                        <span class="mt-2" style="color: green; background: rgba(0, 128, 0, 0.1); padding: 5px;border-radius:12px;">{{ $vals['etat'] }}</span>
                                                    @endif    
                                                    </p>
                                                    <p class="card-text"><b>Prix:</b> {{ $vals['prix'] }}</p>
                                                    <p class="card-text"><b>Quantité:</b> {{ $vals['qte']." ".$vals['unite']}}</p>
                                                    <p class="card-text"><b>Total:</b> {{ $vals['qte'] * $vals['prix'] }} DH</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <hr>
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xl-12">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <h1 class="mt-5">Détail de projet</h1>

                            @if (count($etat_global) !== 0)
                                <table class="table table-secondary table-striped my-5">
                                    <tr>
                                        <th>Devi</th>
                                        <th>Ouvrages</th>
                                        <th>Taux d'avancement</th>
                                        <th>Totale TTC</th>
                                    </tr>
                                    @foreach ($etat_global as $res)
                                        <tr>
                                            <td>{{ $res->nom_devi }}</td>
                                            <td>{{$res->designation_ouvrage	}}</td>
                                            <td>{{ number_format((($res->prix * $res->qte) / $res->totale) * 100, 2) }}%</td>
                                            <td>{{ $res->totale }}DH</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <div class="alert alert-danger mt-5">Pour pouvoir voir le tableau de statistique, vous devez
                                    remplir tous les champs
                                    autres tables nécessaires (Devis, Ouvrages)</div>
                            @endif
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                    <hr>
                    <!-- Main row -->
                    <div class="row">
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
                                        <th>Article</th>
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
                    </div>
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
@endsection
