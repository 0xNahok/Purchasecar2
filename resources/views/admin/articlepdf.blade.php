<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Vendor-->


</head>
<body style="background-color:white">

    <div class="container">
            
        <div >
        <img src="{{asset("img/header.png")}}" alt="" width="100%">	
        </div>
    
    
        <div>
            <center><h3> Lista de producto</h3></center>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Artista</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
     @foreach($Article as $art)
    <tr>
          <th scope="row">{{$art->id}}</th>
          <td>{{$art->name}}</td>
          <td>{{$art->artist->stagename}}</td>
          <td>{{$art->exist}}</td>
          <td>{{$art->price}}</td>
        
        </tr>
     @endforeach
        
      </tbody>
    </table>
            
        </div>
    
    </div>
    </body>
</html>
