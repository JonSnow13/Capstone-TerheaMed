@extends('master_folder.app')

@section('content')
	<div class="man-content">
		<div class="row">
			<div class="col-md-6" id="medicinePanel">
				<div class="man-loader col-md-6">
					<img src="{{asset('assets/images/load.gif')}}" style="width: 40px;">
				</div>

				<div class="card-specific-med" style="display: none;">
					<button class="btn btn-light btn-xs btn-simple" style="margin-bottom: 5px;" onclick="backToAllSearchMed()">< back</button>
					<div class="prescription">You can't obtain this medicine without a prescription from a doctor.</div>
			  		<div class="man-row">
			  			<div class="col-md-12 man-img-center">
				  			<img id="productPicture" src="{{asset('assets/images/biogesic.jpg')}}" style="height: 100%;">
				  		</div>
				  		<div class="col-md-12">
				  			<div class="card-title"><b id="productName">Paracetamol Biogesic</b></div>
				  			<b id="productDetailsTitle">Product Details</b>
				  			<p id="productBrand">Brand Name: Unilab</p>
				  			<p id="productGenericName">Generic Name: Paracetamol</p>
				  			<p id="productFormat">Format: Caplet</p>

				  			<b id="whatDesc">What is this medicine for?</b>
				  			<p style="font-size: 15px;" id="productDesc">For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction. What is in the medicine? Each tablet contains: Paracetamol, 500 mg.</p>

				  			<div id="forHerbalPurpose"></div>

				  			<b id="whatUsage">How much and how often should you use this medicine?</b>
				  			<p style="font-size: 15px;">
				  				<ul id="productUsage"></ul>
				  			</p>

				  			<b>Warning</b>
				  			<p style="font-size: 15px;" id="productSideEffects">This medicine should be taken orally every 4 hours, as needed for pain and/or as directed by doctor.</p>

				  			<b id="whatsInside">What is in this medicine?</b>
				  			<table class="table">
							  <tbody id="contentOfMedicine">
							    {{-- <tr>
							      <th scope="row">1</th>
							      <td>Cetirizine dihydrochloride</td>
							      <td>5 mg</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Phenylephrine HCI</td>
							      <td>10 mg</td>
							    </tr> --}}
							  </tbody>
							</table>
				  		</div>
			  		</div>
			  		<div class="col-md-12 title-header">
		  				<b>Reviews:</b>
		  			</div>
		  			<div class="col-md-12">
		  				<div id="reviewsInViewMed"></div>
		  			</div>
			  		<hr>
			  		<div class="col-md-12 title-header">
		  				<b>More medicine:</b>
		  			</div>
		  			<div class="man-row" id="similarMedPanel">
		  				{{-- <div class="man-card-with-border col-md-6">
						  <div class="man-img-center-without-border">
						  	<img src="{{asset('assets/images/biogesic.jpg')}}" alt="Card image cap">
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Phenylephrine HCI Chlorphenamine Maleate Paracetamol</h5>
						  </div>
						</div> --}}
		  			</div>
				</div>
				<div class="card-panel-medicine">
					<h5 style="padding: .5rem .5rem; color: #696a6d;" id="suggestedMedicineLabel">Suggested Medicine(s):</h5>
					<div id="searchedPanel">
						{{-- @if(isset($searchData))

						@foreach ($searchData as $val)

							<div data-id="{{ $val->id }}" class="man-card searchCard">
								<div class="man-row">
							  		<div class="col-md-4 man-img-med-shell">
								  			<img src="{{ $val->picture }}" style="width: 100%;">
								  	</div>
								  	<div class="col-md-8">
								  		<div class="card-title"><b>{{ $val->name }}</b></div>
								  		<p style="font-size: 15px;">{{ $val->desc }}</p>
								  	</div>
						  		</div>
						  		<div class="see-more-card">
						  			<div class="see-more-btnn" onclick="view_medicine({{ $val->id }})">Click me to see more</div>
						  			<div class="more-btnn" id="morevertBtn{{ $val->id }}">
						  				<i class="material-icons">more_vert</i>
						  			</div>
						  		</div>
						  		<div class="med-footer">
					  				<div class="row">
										<button type="button" class="btn btn-light col-md-12 commentBtn" onclick="loadDisqus('#commentPanel{{ $val->id }}', 'commentPanel{{ $val->id }}', 'https://terheamed.com#!commentPanel{{ $val->id }}' )">
										  Reviews
										</button>
					  				</div>
					  			</div>
					  			<div class="col-md-12 comment-section">
					  				<div id="commentPanel{{ $val->id }}"></div>
	  							</div>
						  	</div>

						@endforeach

					  	@else --}}

					  	<div class="welcome-card">
			  				<center>
			  					<h2>Welcome to Terhea</h2>
			  				</center>
			  				
			  				<div style="margin-top: 32px; ">
			  					<div class="welcome-row">
			  						<div class="medium-card" onclick="searchBtnByCategory('herbal')" style="cursor: pointer;">
					  					<img src="{{asset('assets/images/home_remedy_bg.jpg')}}" style="height: 100%; min-width: 100%;">
					  					<div class="home-remedy-layer">
					  						<h3 class="home-remedy-title">Herbals</h3>
					  					</div>
					  				</div>
							  		<div class="medium-card" style="text-align: unset; color: #fff; background: #0b1448; max-height: 190px; overflow: auto;">
							  			<div style="display: block; margin-top: 8px;">
							  				<div style="width: 50%; float: left;">
							  					<div style="padding-left: 16px; ">
							  						<b style="font-size: 16px;">Vitamins & Supplements</b>
										  			<a href="javascript: searchBtnByCategory('enervon vitamin')">Enervon</a><br>
										  			<a href="javascript: searchBtnByCategory('enervon activ vitamin')">Enervon Activ</a><br>
										  			<a href="javascript: searchBtnByCategory('Myra-e vitamin')">Myra-e 400</a><br>
										  			<a href="javascript: searchBtnByCategory('Vigor Ace supplement')">Vigor Ace</a>
							  					</div>
								  			</div>
								  			<div style="width: 50%; float: left;">
								  				<div style="padding-left: 16px; ">
									  				<b style="font-size: 16px;">Common symtomps</b>
										  			<a href="javascript: searchBtnByCategory('Cough')">Cough</a><br>
										  			<a href="javascript: searchBtnByCategory('Fever')">Fever</a><br>
										  			<a href="javascript: searchBtnByCategory('Headache')">Headache</a><br>
										  			<a href="javascript: searchBtnByCategory('Toothache')">Toothache</a><br>
										  			<a href="javascript: searchBtnByCategory('Stomach')">Stomach ache</a>
										  		</div>
								  			</div>
							  			</div>
							  		</div>
			  					</div>
						  		<div class="welcome-row">
						  			<a href="{{url('/healthtips')}}" class="medium-card" >
							  			<img src="{{asset('assets/images/health-tips.jpg')}}" style="height: 100%; min-width: 100%;">
					  					<div class="home-remedy-layer">
					  						<h3 class="home-remedy-title">Health Tips</h3>
					  					</div>
							  		</a>
							  		<a href="{{url('/homeremedy')}}" class="medium-card" >
							  			<img src="{{asset('assets/images/home_remedy.jpg')}}" style="height: 100%; min-width: 100%;">
					  					<div class="home-remedy-layer">
					  						<h3 class="home-remedy-title">Home Remedies</h3>
					  					</div>
							  		</a>
						  		</div>
						  		<div class="welcome-row">
						  			<div class="large-card" onclick="seeAllPharmaClinic()">
							  			<img src="{{asset('assets/images/map.jpg')}}" style="width: 100%; min-height: 100%;">
							  			<div class="home-remedy-layer">
							  				<h3 style="padding-top: 10%; color: #fff">Explore Pharmacy and Hospital in your location</h3>
							  			</div>
							  		</div>
						  		</div>
			  				</div>
					  	</div>

						{{-- @for($i = 0; $i < 1; $i++)
						<div class="man-card" onclick="view_medicine()">
					  		<div class="man-row">
					  			<div class="col-md-4 man-img-med-shell">
						  			<img src="{{asset('assets/images/biogesic.jpg')}}" style="width: 100%;">
						  		</div>
						  		<div class="col-md-8">
						  			<div class="card-title"><b>Paracetamol Biogesic</b></div>
						  			<p style="font-size: 15px;">For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction. What is in the medicine? Each tablet contains: Paracetamol, 500 mg.</p>
						  		</div>
					  		</div>
					  		<div class="see-more-card">
					  			<div class="see-more-btnn">Click to see more</div>
					  			<div class="more-btnn">
					  				<i class="material-icons">more_vert</i>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="med-footer">
			  				<div class="row">
								<button type="button" class="btn btn-light col-md-6">
								  Rate <span class="badge badge-light">4.5</span>
								</button>
			  					<button type="button" class="btn btn-light col-md-6 commentBtn" onclick="appendComment('#commentPanel')">
								  Comments <span class="badge badge-light">4</span>
								</button>
			  				</div>
			  			</div>
			  			<div class="comment-section" id="commentPanel">
			  				<ul class="comment-group">
							  <li class="comment-item"> 
							  	<div style="width: 13%">
							  		<img src="{{asset('assets/images/manuel.png')}}" style="width: 45px; border-radius: 50%;">
							  	</div>
							  	<div style="width: 87%">
							  		Cras justo odio  Cras justo odio  Cras justo odio  Cras justo odio  Cras justo odio
							  	</div>
							  </li>
							</ul>
			  			</div>
					  	<hr style="margin-right: 1%; margin-left: 1%;">
					  	@endfor  --}}
					  	

					</div>
				</div>
			</div>

			<div class="col-md-6 pharma-clinic-panel">

				<div style="display: flex;">
					<p class="title-pharmacy-clinic-panel" id="yourLocationLabel">You're now at:</p>
					<button class="material-icons location-help" data-html="true" data-trigger="focus" data-toggle="popover" data-content="Not your location?  <a href='javascript: goMapToChange()'>change</a>" data-placement="right">help_outline</button>
				</div>
				<p class="title-pharmacy-clinic-panel">To view the map click <a href="javascript: seeAllPharmaClinic()" style="font-weight: bolder; font-size: 20px;">here.</a></p>
				<p class="title-pharmacy-clinic-panel" id="nearestPhamacy">Nearby pharmacy and hospital in your area: </p>

				<div class="row" style="margin-top: -20px;">
					<div class="col-md-6">
						<h6 style="padding: .5rem .5rem; color: #696a6d;">Pharmacy</h6>
						<div class="pharmacy-container" id="panel-1">
							
							{{-- @for($i = 0; $i < 5; $i++)
							<div class="pharmacy-panel">
								<div class="img-box" style="background: grey; color: white;" id="pharma'+i+'" >
									<h6 class="pharma-title">Generic</h6>
									<div class="open-icon">
										<i class="material-icons">check_circle</i> Open now
									</div>
									<div class="person-waving">
										<img src="{{asset('assets/images/nurse4.gif')}}" style="width: 50%">
									</div>
								</div>
								<div class="man-card-body">
									<div class="distance-view" id="directionView'+i+'">
										<i class="material-icons location-pointer">location_on</i>
										<p class="distance-label" id="pharmaD'+ i +'">1km away</p>
									</div>
									<div class="option-view">
										<i class="material-icons">more_vert</i>
									</div>
								</div>
							</div>
							@endfor --}}

							{{-- <div class="pharmacy-panel">
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
						<button class="btn btn-xs btn-light col-md-12" onclick="loadMore(this, 'pharma')"> <span id="pharmaLoadMoreBtn">Load more</span> <img src="{{asset('assets/images/loader.gif')}}" class="loader-more"></button>
					</div>

				<div class="col-md-6">
					<h6 style="padding: .5rem .5rem; color: #696a6d;">Clinic</h6>
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
					<button class="btn btn-xs btn-light col-md-12" onclick="loadMore(this, 'clinic')"> <span id="clinicLoadMoreBtn">Load more</span> <img src="{{asset('assets/images/loader.gif')}}" class="loader-more"></button>
				</div>
				</div>
			</div>

		</div>

	</div>

	<div class="big-map-panel">
		<div class="man-row">
			<div style="width: 25%; overflow: auto;" id="bigMapPlaceDetails">
				<button class="btn btn-light btn-xs btn-simple" style="margin-bottom: 5px;" onclick="hideBigMap()">< back to home with this current location</button>
				<div class="col-md-12">
					<div class="form-group">
						<div class="custom-control custom-radio">
						  <input type="radio" id="searchEstablishmentRadio" name="radioBtn" class="custom-control-input" checked>
						  <label class="custom-control-label" for="searchEstablishmentRadio">Search Pharmacy / Clinic / Hospital</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="changeLocRadio" name="radioBtn" class="custom-control-input">
						  <label class="custom-control-label" for="changeLocRadio">Change location</label>
						</div>
					</div>
					<div class="form-group">
						<input id="pac-input" class="form-control" type="text" placeholder="Search">
					</div>
					<div class="big-map-streetview" id="bigMapStreetview"></div>

					<b id="placeName"></b>
					<div class="form-group">
						<a href="javascript: directionViewBigMap()" id="directionViewBigMapBtn">View direction</a>
					</div>
					<b id="openNOwTitle"></b>
					<b id="rateTitle" style="padding: 12px;"></b>
					<table class="table">
						<thead>
							<tr>
								<th scope="col"><i style="color: #0b95d2;">Open hours</i></th>
							</tr>
						</thead>
						<tbody id="openHoursTable">
							
						</tbody>
					</table>
				</div>
			</div>

			<div style="width: 75%" id="seeAllMap"></div>
		</div>
	</div>

@endsection
