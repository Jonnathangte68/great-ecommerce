<header>

	<div class="container hmain">

	{!! Form::open(['route' => 'principal.buscar', 'method' => 'POST']) !!}
		<div class="row form-group-sm">
			<div class="col-sm-2">
				<a href="#"><img src="{{ URL::to('/') }}/uploads/logo_price_center.jpg" style="left:10px"></a>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3">{{ Form::text('search', '', ['id' => 'buscador','class' => 'form-control input-sm', 'placeholder' => 'Search']) }}</div>
			<div class="col-sm-2"><span id="buscar"><i class="fa fa-search" aria-hidden="true"></i><a href="#" style="color:black"> Search</a></span></div>
			<div class="col-sm-1"><span><a href="#" style="color:black;text-align:right">Sign In </a><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
			<div class="col-sm-1"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px"></i></div>
		</div>
	</div>

	{!! Form::close() !!}

</header>

