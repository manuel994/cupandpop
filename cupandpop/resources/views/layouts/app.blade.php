<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}} 
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/fontawesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/layout.css') }}">
	  
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	

</head>
<body>



  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CupAndCop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> --}}


<nav class="navbar navbar-expand-md navbar-fondo">
  <a class="navbar-brand cup-navbar " href="#">
    <img src="{{asset('/img/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
    CupAndCop
  </a>
  <div class="navbar-header">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:pink"></i></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link cup-element" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="#">¿Quiénes somos?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="#">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="#">Eventos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link cup-element dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contacto
        </a>
        <div class="dropdown-menu cup-element" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item cup-element" href="#">Cotizaciones</a>
          <a class="dropdown-item cup-element" href="#">Información</a>
        </div>
      </li>
	</ul>
  </div>
    	
			{{-- Multilenguaje
    		<ul class="nav navbar-nav navbar-right">
            <li><a href="#">En</a></li>
            <li><a href="#">Es</a></li>
          </ul> 
 --}}
</nav>
        
<!-- FIN HEADER-->


<!-- CONTENIDO-->
<div class="container contenido">@yield('content')</div>
<!-- FIN CONTENIDO-->


<!-- FOTTER-->
<nav class="navbar fixed-bottom navbar-expand-lg navbar-default">
<div class="col-md-12 text-center">
<a class="btn" style="font-size:24px" href="http://www.facebook.com"><i class="fa fa-facebook-official"></i></a>
<a class="btn" style="font-size:24px" href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
<a class="btn" style="font-size:24px" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
 </div>
</nav>
<!-- FIN FOTTER-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>


</body>
</html>