@extends('layouts.appadmin')




@section('content')
<div class="container-fluid p-0">
    <br><br><br>
  
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">    
       
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Artista</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
           @foreach($Articles as $art)
          <tr>
                <th scope="row">{{$art->id}}</th>
                <td>{{$art->name}}</td>
                <td>{{$art->artist->stagename}}</td>
                <td>{{$art->exist}}</td>
                <td>{{$art->price}}</td>
                <td><i class="fa fa-eraser" aria-hidden="true"></i></td>
                <td>{{$art->price}}</td>
              </tr>
           @endforeach
              
            </tbody>
          </table>
        
    </section>
      </div>
@endsection
