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
    <script src="{{ asset('engine1/jquery.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
    <!-- Vendor-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/devicons/css/devicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

</head>
<body id="page-top" >
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                  <span class="d-block d-lg-none">Rock n' Roll</span>
                  <span class="d-none d-lg-block">
                    
                  </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      
                       <img src="img/Logo.png" class="circleimg" style="height: 150px; width: 150px; ">
                          <br>
                          <h3> Administrador </h3>
                        
                        
                      <a class="nav-link js-scroll-trigger active" href="admin">General</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="admin-add"> Orden de Compra</a>
          
                    </li>
                  
          
                      <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#"> Cerrar Sesión</a>
          
                    </li>
          
                  </ul>
                </div>
              </nav>
              
    @yield('content')
</body>
<script>
    function change(sig, add){

        var a = $(add).val()
  
    if(sig == true){
        a++
    }else if(sig == false)
    {
        a--
    }

           $(add).val(a);

    }
</script>
</html>
