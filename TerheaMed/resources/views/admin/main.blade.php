<!DOCTYPE html>
<html>
<head>
	<title>Terhea Med</title>
	<link rel="icon" type="image/x-icon" href="{{asset('assets/images/terhea_logo.png')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/man_library/css/man.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/sweet-alert/sweetalert.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/sweet-alert/sweetalert.js')}}"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	{{-- <script type="text/javascript" src="{{asset('assets/js/jquery.visible.js')}}"></script> --}}

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background: #3F51B5; margin-bottom: 1rem;">
	  <a class="navbar-brand" href="/CapstoneTerheaMed/TerheaMed/public/" style="color: #fff"><b>Terhea</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" id="burgerMenu">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item">
	      	@if(Request::is('admin'))
		    	<a class="man-link man-active" href="{{url('admin')}}">Admin</a>
		    @endif
	      </li>
	    </ul>
	    <ul class="nav justify-content-end">
		  <li class="nav-item">
		  	@if(Request::is('admin'))
		    	<a class="man-link" href="{{ url('admin-login') }}">Log out</a>
		    @endif
		  </li>
		</ul>
	  </div>
	</nav>
	
	@yield('content')
	

@include('admin.script')
@include('admin.validation')
@include('admin.modal')

<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('assets/sweet-alert/sweetalert.min.js')}}"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}



</body>
</html>