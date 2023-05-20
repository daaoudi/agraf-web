@extends('layout.layouts')

@section('title')
Matiere : {{$matier->designation}} Type : {{$matier->type}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Matiere</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Matiere</li>
      </ol>

    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <button class="go-back" onclick="history.back();">
              <span class="material-symbols-outlined">arrow_back</span>
            </button>
          </div>
          <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @endif
  
            <div class="card-content">
              <div class="mb-3">
                <strong>Designation:</strong> {{$matier->designation}}
              </div>
              <div class="mb-3">
                <strong>Prix:</strong> {{$matier->prix}}
              </div>
              <div class="mb-3">
                <strong>Type:</strong> {{$matier->type}}
              </div>
              <div class="mb-3">
                <strong>Quantité:</strong> {{$matier->qte}}
              </div>
              <div class="mb-3">
                <strong>Matière Unite:</strong> {{$matier->matiere_unite}}
              </div>
            </div>
            <div class="text-right mt-4">
              @if(auth()->check())
              @if(auth()->user()->is_admin)
              <button title="Modifier" class="btn btn-success">
                <a href="{{route('matiers.edit',$matier->id)}}">
                  <span class="material-symbols-outlined">edit</span>
                </a>
              </button>
              <form action="{{route('matiers.destroy',$matier->id)}}" method="post" id="{{$matier->id}}" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                      if(confirm('Êtes-vous sûr de vouloir supprimer ?'))
                        document.getElementById('{{$matier->id}}').submit();" type="submit">
                  <span class="material-symbols-outlined">delete</span>
                </button>
              </form>
              @else
              <span style="color:red;">Vous n'avez pas accès à ces actions !</span>
              @endif
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection