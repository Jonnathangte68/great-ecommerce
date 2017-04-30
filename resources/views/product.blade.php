@extends('/layouts/product/app')


@section('content')

<div class="row">

	<div id="imagenesvarias" class="col-sm-1 col-lg-1 col-md-1">
		@foreach($producto->imagenproductos as $imagen)
			<div class="row">
				<img src="{{ URL::to('/') }}/product_resources/uploads/{{ $imagen->ruta }}" class="seguidilla">
			</div>
		@endforeach
	</div>
	<div class="col-sm-3 col-lg-3 col-md-3">
		<div id="imagencentral">
			
		</div>
	</div>
	<div class="col-sm-6 col-lg-6 col-md-6">

		<h2>{{ $producto->name }}</h2>
		<hr>
		<br>
		<ul>
			@foreach($producto->detalleproductos as $detail)
				<li>{{ $detail->texto }}</li>
			@endforeach
		</ul>
	</div>
	<div class="col-sm-2 col-lg-2 col-md-2">
		Otros Productos
	</div>

</div>

@endsection