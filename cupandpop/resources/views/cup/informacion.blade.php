@extends('layouts.default')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12 titulo text-center">
    Información
  </div>
</div>
 <div class="row">
 	<div class="col-md-3"></div>
  	<div class="col-md-6">
 		<form>
  			<div class="form-group">
    			<label for="exampleFormControlInput1" class="subtitulo">Email</label>
    			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@email.com" required="required">
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlTextarea1" class="subtitulo">Mensaje</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="required"></textarea>
  			</div>
      <div class="form-group text-center">
          <button type="submit" class="btn btn-primary" style="background: #D95371">Enviar Mensaje</button>
      </div> 
 </div> 
</form> 
</div>
@stop