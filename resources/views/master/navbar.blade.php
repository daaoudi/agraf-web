

<!-- ======= Header ======= -->
<header id="header" class="header   ">
<div class="container-fluid   d-flex align-items-center justify-content-between  ">
    <div>
      <p id="time" class="text-dark d-inline-block"></p>
      <p id="date" class="text-dark d-inline-block""></p>
    </div>
    <div>
      <a href="/register" class="btn btn-outline-warning">Inscription</a>
        <a href="/login" class="btn btn-outline-danger">Connexion</a>
    </div>

  </div>
    <div class="container-fluid  container-xxl d-flex align-items-center justify-content-between rounded-3  " >


      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="/storage/assets/img/agraf.png" width="40px" height="130px" class="rounded-5" alt="">
        <h1 class="text-dark">Agraf<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar ">
        <ul>
          <li><a href="#" class="text-dark active">Acceuil</a></li>
          <li><a href="#" class="text-dark">à propos</a></li>
          <li><a href="#" class="text-dark">Services</a></li>
          <li><a href="#" class="text-dark">Projets</a></li>
         
          <li class="dropdown" ><span class="text-dark">Formulaire</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              
              <li class="dropdown" ><span class="text-dark">Creation</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                <ul>
                  <li><a href="{{url('fournisseurs/create')}}" class="text-dark">fournisseurs </a></li>
                  <li><a href="{{url('clients/create')}}" class="text-dark">clients </a></li>
                  <li><a href="{{url('matiers/create')}}" class="text-dark">matieres </a></li>
                  <li><a href="{{url('chantiers/create')}}" class="text-dark">chantiers </a></li>
                  <li><a href="{{url('ouvriers/create')}}" class="text-dark">ouvries </a></li>
                  <li><a href="{{url('services/create')}}" class="text-dark">services </a></li>
                </ul>
              </li>
             
             
            </ul>
          </li>
          <li><a href="#" class="text-dark">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->



    </div>


  </header><!-- End Header -->
