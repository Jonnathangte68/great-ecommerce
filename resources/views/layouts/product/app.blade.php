<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Calexico Price Center | Find Great Deals</title>
		<meta name="description" content="calexico price center overstock outlet buy clothes cheap quality">
		<meta name="author" content="calexico price center">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->

		<!-- Font Awesome CSS -->
		<link href="{{ URL::to('/') }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Plugins --> 
		<link href="{{ URL::asset('css/animations.css') }}" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

		<!-- Custom css --> 
		<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

		<link href="{{ URL::asset('css/component.css') }}" rel="stylesheet">

		<!-- Footer CSS -->
		<link href="{{ URL::asset('css/footer.css') }}" rel="stylesheet">

		<!-- Footer CSS -->
		<link href="{{ URL::asset('product_resources/css/style.css') }}" rel="stylesheet">

	</head>

	<body>


		@include('/headers/mainheader')

		@include('/menus/menuprincipal')



		
		@yield('content')






		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="{{ URL::asset('product_resources/js/customs.js') }}"></script>		

	</body>

</html>