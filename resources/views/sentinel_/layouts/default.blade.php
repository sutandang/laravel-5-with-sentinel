<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		@section('title') 
		@show 
	</title>
	
	<!-- Pixels Assets -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic" rel="stylesheet" type="text/css">

	<!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
	<!-- <link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/normalize.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/foundation.min.css') }}"> -->

	{!! HTML::style("assets/dist/styles/vendor.css") !!}
    
    <!-- Dev - Use this stylesheets while in development -->
    <!-- {!! HTML::style("assets/.tmp/styles/main.css") !!} -->

    <!-- Dist - Use this stylesheets when you ready to deploy -->
    {!! HTML::style("assets/dist/styles/main.css") !!}

	<script src="{{ asset('packages/rydurham/sentinel/js/modernizr.js') }}"></script>

</head>
<body>
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
	<script src="{{ asset('packages/rydurham/sentinel/js/jquery.js') }}"></script>
	<script src="{{ asset('packages/rydurham/sentinel/js/foundation.min.js') }}"></script>
	<script src="{{ asset('packages/rydurham/sentinel/js/restfulizer.js') }}"></script>
	<!-- Thanks to Zizaco for the Restfulizer script.  http://zizaco.net  -->
	<script>
		$(document).foundation();
	</script>

	<script src="{!! url('assets/dist/scripts/vendor.js') !!}"></script>
    <script src="{!! url('assets/dist/scripts/main.js') !!}"></script>
</body>
</html>