<!DOCTYPE html>
<html>
<head>
	<title>Terhea Med</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>

	<div class="container">
		@yield('navigation')
		@yield('content')
	</div>

</body>

<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</html>