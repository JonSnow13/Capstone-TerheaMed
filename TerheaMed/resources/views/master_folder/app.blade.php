<!DOCTYPE html>
<html>
<head>
	<title>Terhea Med</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
	<link rel="icon" type="image/x-icon" href="{{asset('assets/images/pharma_icon.png')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/man_library/css/man.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	{{-- <script type="text/javascript" src="{{asset('assets/js/jquery.visible.js')}}"></script> --}}

</head>
<body>
{{-- <div id="fb-root"></div>
<script>

	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=161442394556549&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

</script> --}}

@include('modals_for_homepage.modal')
@include('scripts_for_homepage.top-script')

	<nav class="navbar navbar-expand-lg navbar-light" style="background: #3F51B5;">
	  <a class="navbar-brand" href="{{url('/')}}" style="color: #fff"><b>Terhea</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" id="burgerMenu">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item">
	        <a class="man-link <?php if(Request::is('/')) echo 'man-active'; ?>" href="{{url('/')}}" id="homeMenu">Home</a>
	      </li>
	      <li>
      		<div class="man-search-form" id="searchBoxForm">
		    	<div class="input-group" style="justify-content: center;">
				    <input type="text" list="category" id="searchBox" class="form-control" placeholder="Search common symtoms or medicine..." aria-describedby="btnGroupAddon">
				    <datalist id="category">
					    <option value="Fever">
					    <option value="Cough">
					    <option value="Headache">
					    <option value="Stomach Pain relief">
					    <option value="Allergy">
					    <option value="Vitamins and Supplements">
					</datalist>
				    <div class="input-group-prepend">
				      <button class="input-group-text" onclick="searchBtn()"><i class="material-icons" style="font-size:20px;">search</i></button>
				    </div>
				</div>
		    </div>
	      </li>
	      <li class="nav-item">
	        <a class="man-link <?php if(Request::is('healthtips') || Request::is('viewtip/*')) echo 'man-active'; ?>" href="{{url('/healthtips')}}">Health Tips</a>
	      </li>
	      <li class="nav-item">
	        <a class="man-link <?php if(Request::is('homeremedy') || Request::is('viewremedy/*')) echo 'man-active'; ?>" href="{{url('/homeremedy')}}">Home Remedy</a>
	      </li>
	      <li class="nav-item">
	        <a class="man-link <?php if(Request::is('seebigmap')) echo 'man-active'; ?>" href="{{url('/seebigmap')}}" id="bigMapMenu" data-toggle="tooltip" data-placement="bottom" title="Nearby pharmacy/drug store and clinic / hospital">Nearby</a>
	      </li>
	      <li class="nav-item">
	        <a class="man-link <?php if(Request::is('about')) echo 'man-active'; ?>" href="{{url('/about')}}">About</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	
	@yield('content')

@include('scripts_for_homepage.script')
@include('scripts_for_homepage.script-for-modal')
@include('scripts_for_homepage.animationScript')
@include('scripts_for_homepage.bottom-script')
@include('admin.validation')
@include('scripts_for_homepage.search-script')


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEe9Jl9DxQwW2vDMyd0iUW4TSGYDapeIE&libraries=places&streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76&callback=initMap" async defer></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}



</body>
</html>