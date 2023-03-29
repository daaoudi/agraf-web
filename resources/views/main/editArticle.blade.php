@extends('layout.layouts')
@section('title')
la modification d'un Article : {{$article->designation}}.
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Article</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Article</li>
    </ol>

  </div>
</div>
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 " data-aos="fade">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

    <form action="{{route('articles.update',$ouvrier->id)}}" enctype="multipart/form-data"  method="post" >
      @csrf
      @method('PUT')
      <h3 class="text-center">Formulaire d'Article : {{$ouvrier->designation}}</h3>
      <p class="text-center">Modifier les Champs. </p>
      <div class="row gy-3 ">

        <div class="col-md-12">
          <input type="text" name="designation" value="{{$ouvrier->designation}}" class="form-control" placeholder="Designation" required>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="Textarea1">Description d'article :</label>
                <textarea name="description" class="form-control" id="Textarea1" rows="3">{{$ouvrier->description}}</textarea>
              </div>
        </div>

        

        

        
        

        <div class="col-md-12 text-center">
          
        
         
          <button class="btn btn-warning" type="submit">Modifier</button>
        </div>

      </div>
    </form>
  </div><!-- End Quote Form -->

    </div>
</div>











@endsection
