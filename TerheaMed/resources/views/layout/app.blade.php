<!DOCTYPE html>
<html>
<head>
	<title>Terhea Med</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/man_library/css/man.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	{{-- <script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script> --}}
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="col-md-12">
	<nav class="navbar navbar-expand-lg navbar-light" style="background: #0b95d2;">
	  <a class="navbar-brand" href="#" style="color: #fff"><b>Terhea</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item">
	        <a class="man-link man-active" href="#">Home</a>
	      </li>
	      <li>
	      	<div class="man-search-form">
	    	<div class="input-group">
			    <input type="text" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon">
			    <div class="input-group-prepend">
			      <button class="input-group-text" id="btnGroupAddon"><i class="material-icons" style="font-size:20px;">search</i></button>
			    </div>
			</div>
	    </div>
	      </li>
	      <li class="nav-item">
	        <a class="man-link" href="#">Adults</a>
	      </li>
	      <li class="nav-item">
	        <a class="man-link" href="#">Kids</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	@yield('content')
</div>

</body>

@include('layout.script')


	
{{-- <script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</html>