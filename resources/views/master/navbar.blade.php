

<!-- ======= Header ======= -->
<header id="header" class="header   ">
<div class="container-fluid     ">
  <div class="row d-flex align-items-center justify-content-between">
    <div class="col-lg-auto">
      <p id="time" class="text-white d-inline-block"></p>
      <p id="date" class="text-white d-inline-block""></p>
    </div>
  
    <div class="col-lg-auto">
      @if(auth()->check())
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('profile.show')}}">{{auth()->user()->name}}</a>
      </li>
      @else
      <a href="/register" title="inscription" class="btn btn-outline-warning">
        <span class="material-symbols-outlined">
          subscriptions
          </span>
      </a>
        <a href="/login" title="connection" class="btn btn-outline-light"><span class="material-symbols-outlined">
          account_circle
          </span></a>
        @endif
    </div>
  </div>

  </div>
    <div class="container-fluid  container-xxl d-flex align-items-center justify-content-between rounded-3  " >


      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="/storage/assets/img/agraf.png" width="40px" height="160px" class="rounded-1" style="" alt="">
        <h1 class="text-white">Agrtravis<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar ">
        <ul>
          <li><a href="#" class="text-white active">Acceuil</a></li>
          <li><a href="#" class="text-white">à propos</a></li>
          <li><a href="#" class="text-white">Services</a></li>
          <li><a href="#" class="text-white">Projets</a></li>
         @if(auth()->check())
          <li class="dropdown" ><a href="#"> <span class="text-white">Formulaire</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul class="bg-secondary" >
              
              <li class="dropdown " id="link" ><a href="#" > <span >Creation</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul class="bg-secondary" >
                  <li id="link"><a href="{{url('fournisseurs/create')}}"  >Fournisseurs </a></li>
                  <li id="link"><a href="{{url('clients/create')}}" >Clients </a></li>
                  <li id="link"><a href="{{url('matiers/create')}}" >Matieres </a></li>
                  <li id="link" ><a href="{{url('chantiers/create')}}" >Projets </a></li>
                  <li id="link"><a href="{{url('ouvriers/create')}}" >Ouvries </a></li>
                  <li id="link"><a href="{{url('services/create')}}" >Services </a></li>
                  <li id="link"><a href="{{url('articles/create')}}" >Articles </a></li>
                </ul>
              </li>
             
             
            </ul>
          </li>
          @endif
          <li><a href="#" class="text-white">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->



    </div>


  </header><!-- End Header -->
