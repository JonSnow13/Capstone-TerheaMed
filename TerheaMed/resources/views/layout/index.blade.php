@extends('layout.app')

@section('content')
	<nav class="navbar justify-content-between" style="background-color: #d40015">
	  <a class="navbar-brand" style="color: #fff">Terhea</a>
	  <form class="form-inline">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	    <button class="btn btn-outline-default my-2 my-sm-0" type="submit">Search</button>
	  </form>
	</nav>
	<nav class="nav" style="border: 1px solid #c3baba">
	  <a class="man-link active" href="#">Home</a>
	  <span class="nav-link">|</span>
	  <a class="man-link" href="#">Adults</a>
	  <span class="nav-link">|</span>
	  <a class="man-link" href="#">Kids</a>
	</nav>
	<div class="content">
		{{-- <div class="row">
			<div class="col-md-12">
				<div style="height: 40px; border: 1px solid #c3baba">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="#">Home</a>
						</li>
						<li class="nav-item"><span class="nav-link">|</span></li>
						<li class="nav-item">
							<a class="nav-link" href="#">Adults</a>
						</li>
						<li class="nav-item"><span class="nav-link">|</span></li>
						<li class="nav-item">
							<a class="nav-link" href="#">Kids</a>
						</li>
					</ul>
				</div>
			</div>
		</div> --}}
		<div class="row">
			<div class="col-md-7">
				<div class="card">
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
			</div>
		</div>
	</div>

@endsection
