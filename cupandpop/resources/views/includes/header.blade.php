<nav class="navbar navbar-expand-md navbar-header fixed-top">
  <a class="navbar-brand " href="{{route('cup.welcome')}}">
    <img src="{{asset('/img/logo.png')}}" width="95" height="95" class="d-inline-block align-top" alt="">
  </a>
  <div class="navbar-header"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon sp"><i class="fa fa-bars icon" style="font-size: 40px;"></i></span>
  </button>
</div>
  <div class="navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link cup-element" href="{{route('cup.welcome')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="{{route('cup.somos')}}">¿Quiénes somos?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="{{route('cup.productos')}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link cup-element" href="{{route('cup.eventos')}}">Eventos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link cup-element dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contacto
        </a>
        <div class="dropdown-menu cup-element" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item cup-element" href="{{route('cup.cotizacion')}}">Cotización</a>
    	  <div class="dropdown-divider"></div>
          <a class="dropdown-item cup-element" href="{{route('cup.informacion')}}">Información</a>
        </div>
      </li>
	</ul>
  </div>
</nav>