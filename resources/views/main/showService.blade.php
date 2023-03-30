@extends('layout.layouts')

@section('title')
{{$service->nom_service .'-'. $service->type_service}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('storage/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Services</li>
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
                    <th>nom service</th>
                    <th>description</th>
                    <th>image</th>
                    <th>type service</th>
                   
                    <th>action</th>
                </tr>
                
                <tr>
                    <td>{{$service->nom_service}}</td>
                    <td>{{$service->description}}</td>
                    <td><img src="{{asset('./storage/images/'.$service['image'])}}" style="aspect-ratio: 0.5;" alt="..."></td>
                    <td>{{$service->type_service}}</td>
                    
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('services.edit',$service->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('services.destroy',$service->id)}}" style="display: inline-block;" method="post" id="{{$service->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$service->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        @endif
                        @endif
                        </td>
                </tr>
               
              </table>
        </div>
    </div>
</div>








@endsection