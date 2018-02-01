@extends('layout.app')

@section('content')
	<nav class="navbar navbar-light bg-light justify-content-between">
	  <a class="navbar-brand">Navbar</a>
	  <form class="form-inline">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  </form>
	</nav>
	<div class="card" style="width: 18rem;">
		  	<div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<form>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Email address</label>
				    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  	</div>
				 	<div class="form-group">
				    	<label for="exampleInputPassword1">Password</label>
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  	</div>
				  	<div class="form-check">
				    	<input type="checkbox" class="form-check-input" id="exampleCheck1">
				    	<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		  </div>
	</div>

@endsection
