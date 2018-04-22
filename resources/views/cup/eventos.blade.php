@extends('layouts.default')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12 titulo text-center">
    Eventos
  </div>
</div>
<div class="row align-items-center">
  <div class="col-md-6 text2">
    <p class="subtitulo" style="color: white">XV Años</p>
    <p class="cuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sit doloremque sapiente molestias quidem, iste doloribus id labore alias eligendi ratione, unde reprehenderit quod quas commodi nam! Vitae, mollitia, error.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos repudiandae odit distinctio, doloremque voluptatum doloribus quod quidem provident corporis! Enim eum architecto nesciunt. Voluptatem autem quidem repellendus recusandae dolorum, magni.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dicta quisquam in consectetur, magnam amet quas fuga modi aperiam, voluptatum ex non officia dolorum facere, et ullam odit similique fugit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam neque, quidem perspiciatis, quia natus impedit quis tenetur dolor voluptates fugit sit, voluptatem, architecto amet consectetur in atque earum suscipit fugiat!</p>    
  </div>

  <div class="col-md-6">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 imagen" src="{{asset('/img/xv3.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>...</h5>
       <p>...</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imagen" src="{{asset('/img/xv2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imagen" src="{{asset('/img/xv1.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
  </div>
</div>

</div>
@stop