@extends('layout.layouts')

@section('title')
liste des clients
@endsection

@section('content')
<div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de clients: {{count($clients)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>telephone</th>
                    <th>montant</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->telephone}}</td>
                    <td>{{$client->montant}}</td>
                    <td>{{$client->email}}</td>
                    <td><button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">delete</button>
                        <button class="btn btn-info">view</button></td>
                </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>








@endsection