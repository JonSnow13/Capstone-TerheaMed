@extends('admin.main')

@section('content')

<div class="man-content" style="background: #e9ebee; height: -webkit-fill-available;">
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-3"></div>
		<div class="col-md-5 card">
			<div class="card-body">
				<h5 class="card-title">Admin Login</h5>
				<div class="form-group">
			    	<label for="exampleInputEmail1">Email address</label>
			    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="terheamedadmin">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Password</label>
			    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="gfdygfdhgdfhy">
			  	</div>
			  	<a href="{{ url('admin') }}" type="submit" class="btn btn-primary">Login</a>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@endsection