@extends('layout.app')

@section('content')
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
			<div class="col-md-6">
				<h5 style="padding: .5rem .5rem; color: #696a6d;">Suggested Medicine(s):</h5>
				<div class="card">
					<div style="padding: 5px;">
				  		<div class="man-row">
				  			<div class="col-md-4 man-img-med-shell">
					  			<img src="{{asset('assets/images/biogesic.jpg')}}" style="width: 100%;">
					  		</div>
					  		<div class="col-md-8">
					  			<p style="font-size: 15px;">For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction. What is in the medicine? Each tablet contains: Paracetamol, 500 mg.</p>
					  		</div>
				  		</div>
				  	</div>
				  	<hr style="margin-right: 1%; margin-left: 1%;">
				  	<div style="padding: 5px;">
				  		<div class="man-row">
				  			<div class="col-md-4 man-img-med-shell">
					  			<img src="{{asset('assets/images/img1.jpg')}}" style="width: 100%;">
					  		</div>
					  		<div class="col-md-8">
					  			<p style="font-size: 15px;">These medicines are used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections. They also help decongest sinus openings and passages.</p>
					  		</div>
				  		</div>
				  	</div>
				  	<hr style="margin-right: 1%; margin-left: 1%;">
				  	<div style="padding: 5px;">
				  		<div class="man-row">
				  			<div class="col-md-4 man-img-med-shell">
					  			<img src="{{asset('assets/images/biogesic.jpg')}}" style="width: 100%;">
					  		</div>
					  		<div class="col-md-8">
					  			<p style="font-size: 15px;">For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction. What is in the medicine? Each tablet contains: Paracetamol, 500 mg.</p>
					  		</div>
				  		</div>
				  	</div>
				  	<hr style="margin-right: 1%; margin-left: 1%;">
				  	<div style="padding: 5px;">
				  		<div class="man-row">
				  			<div class="col-md-4 man-img-med-shell">
					  			<img src="{{asset('assets/images/img1.jpg')}}" style="width: 100%;">
					  		</div>
					  		<div class="col-md-8">
					  			<p style="font-size: 15px;">These medicines are used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections. They also help decongest sinus openings and passages.</p>
					  		</div>
				  		</div>
				  	</div>
				  	<hr style="margin-right: 1%; margin-left: 1%;">
				  	<div style="padding: 5px;">
				  		<div class="man-row">
				  			<div class="col-md-4 man-img-med-shell">
					  			<img src="{{asset('assets/images/biogesic.jpg')}}" style="width: 100%;">
					  		</div>
					  		<div class="col-md-8">
					  			<p style="font-size: 15px;">For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction. What is in the medicine? Each tablet contains: Paracetamol, 500 mg.</p>
					  		</div>
				  		</div>
				  	</div>
				</div>
			</div>

			<div class="col-md-6">
				<h6 style="padding: .5rem .5rem; color: #696a6d;" id="nearestPhamacy">Nearby pharmacy and hospital in your area:</h6>
				<div class="row">
					<div class="col-md-6">
					<div class="pharmacy-container" id="panel-1">
						

						{{-- <div class="pharmacy-panel">
							<img class="card-img-top" src="{{asset('assets/images/generic.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						  		<h6 class="pharma-title">Generic pharmacy</h6>
						  		<div class="man-row location-label" onclick="locationView()">
						  			<i class="material-icons">location_on</i>
						  			<p class="distance-label"><b>Distance: </b>1km away from your location</p>
						  		</div>
							</div>
						</div>

						<div class="pharmacy-panel">
							<img class="card-img-top" src="{{asset('assets/images/mercury.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						  		<h6 class="pharma-title">Mercury Last</h6>
						  		<div class="man-row location-label" onclick="locationView()">
						  			<i class="material-icons">location_on</i>
						  			<p class="distance-label"><b>Distance: </b>150m away from your location</p>
						  		</div>
							</div>
						</div> --}}
					</div>
				</div>

				<div class="col-md-6">
					<div class="pharmacy-container" id="panel-2">
						{{-- <div class="pharmacy-panel-2">
							<img class="card-img-top" src="{{asset('assets/images/generic.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						  		<h6 class="pharma-title">Generic pharmacy</h6>
						  		<div class="man-row location-label" onclick="locationView()">
						  			<i class="material-icons">location_on</i>
						  			<p class="distance-label"><b>Distance: </b>1km away from your location</p>
						  		</div>
							</div>
						</div>

						<div class="pharmacy-panel-2">
							<img class="card-img-top" src="{{asset('assets/images/mercury.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						  		<h6 class="pharma-title">Mercury Last</h6>
						  		<div class="man-row location-label" onclick="locationView()">
						  			<i class="material-icons">location_on</i>
						  			<p class="distance-label"><b>Distance: </b>150m away from your location</p>
						  		</div>
							</div>
						</div> --}}
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</div>

@endsection
