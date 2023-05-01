@extends('layout.layouts')

@section('title')
l'Article: {{$article->designation}}
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Article</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Article</li>
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
            
            <h4> Article: {{$article->designation}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                   
                    <th>designation</th>
                    <th>description</th>
                    <th>article_unite</th>
                
                    
                    <th>action</th>
                </tr>
               
                <tr>
                    
                    <td>{{$article->designation}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->article_unite}}</td>
                  
                    
                    <td>
                        @if(auth()->check())
                        @if(auth()->user()->is_admin)
                        <button title="Modifier" class="btn btn-success"><a href="{{route('articles.edit',$article->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('articles.destroy',$article->id)}}" style="display: inline-block;" method="post" id="{{$article->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$article->id}}').submit();" type="submit"><span class="material-symbols-outlined">
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