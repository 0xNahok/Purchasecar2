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


    <!-- Fonts -->
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Vendor-->


</head>
<body style="background-color:white">

   <div class="container">
                
        <div >
                <img src="{{asset("img/header.png")}}" alt="" width="100%">	
                </div>
    
                <div>

         
                        <center><h3> Lista de compras</h3></center>
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" >ID</th>
                <th scope="col" >Producto</th>
                <th scope="col" >Cantidad</th>
                <th scope="col" >Fecha</th>
                <th scope="col" >Usuario</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($order as $ord)
            <tr>
                <th scope="row" >{{ $ord->id }}</th>
                <td>{{ $ord->article->name }}</td>
                <td>{{ $ord->quant }}</td>
                <td>{{ $ord->created_at }}</td>
                <td>{{ $ord->users[0]->firstname}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
   
   </div>
</body>
</html>
