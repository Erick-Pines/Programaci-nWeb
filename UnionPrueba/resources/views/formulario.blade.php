@extends('plantillas.plantilla1')
@section('title', 'Prueba')
@section('author', 'Jerry')
@section('description', 'Descripción de la página')
@section('content')
     <div class="jumbotron">
		  <h1>Hello, world!</h1>
		  <p>...</p>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      {{ Html::image('img/picture.jpg') }}
      <div class="carousel-caption">
        Algun texto
      </div>
    </div>
    <div class="item">
      {{ Html::image('img/picture2.jpg') }}
      <div class="carousel-caption">
        Más texto
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="container">
	<div class="row formulario">
   		@if(Session::has('message'))
            <h2>
              {!!Session::get('message')!!}
            </h2>
        @else
            <h2>Formulario</h2>
            <p>Llena el formulario paro</p>
        @endif

  		<form method="POST" action="{{url('form')}}">
		  <div class="form-group">
		    <label>Nombre</label>
		    <input type="text" value="{{Input::old('name')}}" class="form-control" name="name" id="name" placeholder="Dame tu nombre" required="required">
		  </div>
		  <div class="form-group">
		     <label>Email</label>
		    <input type="email" value="{{Input::old('email')}}" class="form-control" name="email" id="email" placeholder="Dame tu email" required="required">
		  </div>
		    <div class="form-group">
		     <label>Numero de lista</label>
		    <input type="number" value="{{Input::old('lista')}}" class="form-control" name="lista" id="lista" placeholder="Dame tu numero de lista" required="required">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		  {{csrf_field()}} 
		</form>
    </div>
  </div>
 <div class="list-group">
  <a href="#" class="list-group-item active">
    Usuarios:
  </a>

  @foreach ($usuarios as $usuario)
 	<a href="#" class="list-group-item">{{ $usuario->Nombre}}</a>
  @endforeach	
</div>
@stop