@extends('layouts.default')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12 titulo text-center">
    Productos
  </div>
</div>
<div class="row align-items-center producto">
  <div class="col-md-6">
  	<img src="{{asset('/img/cup.jpg')}}" class="img-fluid imagen" alt="Responsive image">
  </div>
  <div class="col-md-6 text1">
  	<p class="subtitulo" style="color: white">Cupcake</p>
  	<p class="cuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sit doloremque sapiente molestias quidem, iste doloribus id labore alias eligendi ratione, unde reprehenderit quod quas commodi nam! Vitae, mollitia, error.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos repudiandae odit distinctio, doloremque voluptatum doloribus quod quidem provident corporis! Enim eum architecto nesciunt. Voluptatem autem quidem repellendus recusandae dolorum, magni.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dicta quisquam in consectetur, magnam amet quas fuga modi aperiam, voluptatum ex non officia dolorum facere, et ullam odit similique fugit!</p>
  </div>   
</div>
<hr>
<div class="row align-items-center producto">
  <div class="col-md-6">
    <img src="{{asset('/img/past.jpg')}}" class="img-fluid imagen" alt="Responsive image">
  </div>
  <div class="col-md-6 text2">
    <p class="subtitulo" style="color: white">Pastel</p>
    <p class="cuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sit doloremque sapiente molestias quidem, iste doloribus id labore alias eligendi ratione, unde reprehenderit quod quas commodi nam! Vitae, mollitia, error.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos repudiandae odit distinctio, doloremque voluptatum doloribus quod quidem provident corporis! Enim eum architecto nesciunt. Voluptatem autem quidem repellendus recusandae dolorum, magni.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dicta quisquam in consectetur, magnam amet quas fuga modi aperiam, voluptatum ex non officia dolorum facere, et ullam odit similique fugit!</p>
  </div>   
</div>

</div>
@stop