@extends("layouts.app");
@section("content")
	<div class="container white">
		<H1>NUEVO PRODUCTO</H1>
		{!! Form::open(['url' => '/products','method'=>'POST'])!!}
		<div class="form-group">
			{{Form::text('tittle','',['class'=>'form-control','placeholder'=>'Titulo...'])  }}
		</div>
		
		<div class="form-group">
			{{Form::number('precio','',['class'=>'form-control','placeholder'=>'Precio...'])  }}
		</div>


		<div class="form-group">
			{{Form::textArea('descripcion','',['class'=>'form-control','placeholder'=>'Descrie el producto...'])}}
		</div>
		<div class="form-group text-right">
			<a href="{{url('/products')}}">Regresar al listado de productos</a>

			<input type="submit" value="enviar" class="btn btn-success">
		</div>

		{!! Form::close() !!}
	</div>
@endsection