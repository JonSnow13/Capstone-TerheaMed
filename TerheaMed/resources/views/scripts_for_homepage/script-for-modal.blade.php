<script type="text/javascript">

	$('.man-map').css('height', mapHeight+'px');
	$('.big-map-panel').css('height', mapHeight2+'px');
	$('#seeAllMap').css('height', mapHeight2+'px');
	$('#bigMapPlaceDetails').css('max-height', mapHeight2+'px');
	$('#man-streeview').css('height', mapHeight+'px');
	$('#streetView').css({'height' : (mapHeight*.60)+'px', 'width' : streetViewWidth+'px'});

	function locationView(i)
	{
		
		// var service = new google.maps.DistanceMatrixService();
		// service.getDistanceMatrix(
		//   {
		//     origins: [myAddress, pos],
		//     destinations: [pharmaPlace[i].vicinity, pharmaPlace[i].geometry.location],
		//     travelMode: 'WALKING',
		//     unitSystem: google.maps.UnitSystem.METRIC,
	 //        avoidHighways: false,
	 //        avoidTolls: false
		//   }, 
		//   	function(response, status)
		//   	{
		//   		var result = response.rows[0].elements;
		//   		// alert(result[0].distance.text);
		//   		console.log(result);
		//   	}
		//   );
		// renderMap();
		$('#mapModal').modal('show');
	}

	function seeAllPharmaClinic()
	{
		$('#homeMenu').removeClass('man-active');
		$('#bigMapMenu').addClass('man-active');
		window.history.pushState('Map', 'Map', 'seebigmap');

		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 20, 'swing');

		map2.setZoom(15);
		directionsDisplay.setMap(null);
		$('.moreMapInfo').hide();


		if (panorama != undefined) 
		{
			$('#streetView').hide();
		}

		$.when(directionsDisplay).done(function(){
			$('#mapModal .modal-title').text('Nearby pharmacy and clinic / hospital');
			// $('#mapModal').modal('show');

			$('.big-map-panel').css('display', 'block');
			$('#medicinePanel').fadeOut();
			$('.pharma-clinic-panel').fadeOut();

			setTimeout(function(){
				$('.big-map-panel').addClass('show');
			},100);
		});

		// $('#mapModal').css('padding', '10px');
	}

	function hideBigMap()
	{
		$('#homeMenu').addClass('man-active');
		$('#bigMapMenu').removeClass('man-active');

		window.history.replaceState('Map', 'Map', 'home');
		$('.big-map-panel').removeClass('show');
		setTimeout(function(){
			$('.big-map-panel').css('display', 'none');
			$('#medicinePanel').fadeIn();
			$('.pharma-clinic-panel').fadeIn();
		},820);
	}

	function searchPlaceFunction()
	{
		// Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        // map2.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map2.addListener('bounds_changed', function() {
          searchBox.setBounds(map2.getBounds());
        });

        var searchedMarkers = [];
         // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          searchedMarkers.forEach(function(marker) {
            marker.setMap(null);
          });
          searchedMarkers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              alert("Returned place contains no geometry");
              return;
            }

            if ($('#changeLocRadio').is(':checked')) 
            {
            	pos = place.geometry.location;
            	initializePhamacyClinicMarker();
            	// hideBigMap();
            	return;
            }

            viewedPlace = place;

            var icon = {
             	url: "{{asset('assets/images/pointer.png')}}", // url
			    scaledSize: new google.maps.Size(46, 46), // scaled size
			    origin: new google.maps.Point(0,0), // origin
			    anchor: new google.maps.Point(0, 0) // anchor
            };

            var marker = new google.maps.Marker({
              map: map2,
              icon: icon,
              title: place.name,
              position: place.geometry.location,
              animation: google.maps.Animation.DROP
            })
            // Create a marker for each place.
            searchedMarkers.push(marker);

          	infowindow.setContent(place.name);
          	infowindow.open(map2, marker);
          	showStreetView(place.geometry.location, 'bigMapStreetview');
          	getPlaceDetailsBigMap(place.place_id);

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          if (!$('#changeLocRadio').is(':checked')) 
          {
          	map2.fitBounds(bounds);
          }
        });
	}

	var map, infoWindow, pos, service, map2;
	var myAddress;
	var directionsDisplay;
	var directionsService;
	var markersPharma = []; //pharma marker for map in modal
	var markersClinic = []; //clinic marker for map in modal
	var markersPharma2 = []; //pharma marker for bigmap
	var markersClinic2 = []; //clinic marker for bigmap
	var panorama;

    function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });

        map2 = new google.maps.Map(document.getElementById('seeAllMap'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });

        @if( Request::is('healthtips') || Request::is('healthtips') )
    		 return;
    	@endif 


        searchPlaceFunction();

        directionsDisplay = new google.maps.DirectionsRenderer;
        directionsService = new google.maps.DirectionsService;
        // map = new google.maps.Map(document.getElementById('map'));
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            
            if (pos == undefined) 
            {
            	pos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };
            }

            // infoWindow.setPosition(pos);
            // infoWindow.setContent('<i class="material-icons">my_location</i> your location');
            // infoWindow.open(map);


     //        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

     		initializePhamacyClinicMarker();
     		
//==========================================================================



          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
            handleLocationError(true, infoWindow, map2.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
          handleLocationError(false, infoWindow, map2.getCenter());
        }

        appearanceManager(); //functionality that manage the appearance of the web depending on the url

      }

	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	    infoWindow.setPosition(pos);
	    infoWindow.setContent(browserHasGeolocation ?
	                          'Error: The Geolocation service failed.' :
	                          'Error: Your browser doesn\'t support geolocation.');
	    infoWindow.open(map);
	    infoWindow.open(map2);
	}

  	function callbackPharmacy(results, status) {
  		$('#panel-1').html('');
	  if (status == google.maps.places.PlacesServiceStatus.OK) {
	  	pharmaPlace = results;

	  	$.each(results, function(i, val){
				createMarker(this);
			});

	    for (var i = 0; i < 5; i++) {
	      var place = results[i];
	      // createMarker(place);

	      	// showStreetView(place, 'pharma'+i);
	      	try{
	      		appendPharmacyHtml(place, i);
	      	}catch(err){}

	      // renderStreetView(results[i].geometry.location, 'pharma'+i);
	    }
	    
	    // getClassOfPharmaPanel();
	    // sortByNearestDistance(results);

	  }
	  personWavingRandom();
	  $('#pharmaLoadMoreBtn').text((pharmaPlace.length <= 0)? 'No nearby pharmacy / drugstore found.' : 'Load more');
	}

	function getMyAddress()
	{
		var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'location': pos}, function(results, status) {
	      if (status == google.maps.GeocoderStatus.OK) 
	      	{
	      		// console.log(results);
		      myAddress = results[0].address_components[0].short_name;
		     
		      $('#yourLocationLabel').text("You're now at: " + myAddress);
		    }
		    else
		    {
		    	myAddress = 'Dipolog City'
		    }
		});

	}

	var markerOfYourLocation;
	var markerOfYourLocation_modal;
	function initializePhamacyClinicMarker()
	{
		setMapOnAll(null);
		try{
	    	markerOfYourLocation.setMap(null);
			markerOfYourLocation_modal.setMap(null);
	    }catch(err){}

	    getMyAddress();

		var icon = {
				    url: "{{asset('assets/images/pulse_dot.gif')}}", // url
				    scaledSize: new google.maps.Size(28, 28), // scaled size
				    origin: new google.maps.Point(0,0), // origin
				    anchor: new google.maps.Point(0, 0) // anchor
					};
		  	markerOfYourLocation_modal = new google.maps.Marker({
		    	position: pos,
		    	map: map,
		    	icon: icon
		  	});
		  	markerOfYourLocation = new google.maps.Marker({
		    	position: pos,
		    	map: map2,
		    	icon: icon,
		    	draggable: true
		  	});
            map.setCenter(pos);
            map2.setCenter(pos);
            console.log(pos);
            markerOfYourLocation.addListener('dragend', function(){
            	pos = this.getPosition();
;            	initializePhamacyClinicMarker();
            	// hideBigMap();
            });

            infowindow = new google.maps.InfoWindow();
//=======================================================================
	     	getNearbyClinicAndPharmacy(pos);
	}


	function getNearbyClinicAndPharmacy(posC)
	{
	        var service = new google.maps.places.PlacesService(map);
	        service.nearbySearch({
	          location: posC,
	          rankBy: google.maps.places.RankBy.DISTANCE,
	          type: ['pharmacy']
	        }, callbackPharmacy);

	        // var service3 = new google.maps.places.PlacesService(map);
	        // service3.nearbySearch({
	        //   location: pos,
	        //   rankBy: google.maps.places.RankBy.DISTANCE,
	        //   type: ['drug store']
	        // }, callbackPharmacy);


	        var service2 = new google.maps.places.PlacesService(map);
	        service2.nearbySearch({
	          location: posC,
	          rankBy: google.maps.places.RankBy.DISTANCE,
	          type: ['hospital']
	        }, callbackClinic);
	}

	function callbackClinic(results, status) 
	{
		$('#panel-2').html('');
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			clinicPlace = results;
			$.each(results, function(i, val){
				createMarkerClinic(this);
			});

		    for (var i = 0; i < 5; i++) {
		      var place = results[i];
		      // console.log(place);
		      // createMarker(results[i]);
		      try{
		      	appendClinicHtml(place, i);
		      }catch(err){}
		      
		    }
		    // getClassOfHospitalPanel();
		}
		personWavingRandom();

		$('#clinicLoadMoreBtn').text((clinicPlace.length <= 0)? 'No nearby clinic / hospital found.' : 'Load more');
	}

	//Pharma icon
	function createMarker(place) 
	{

		var icon = {
		    url: "{{asset('assets/images/pharma_icon.png')}}", // url
		    scaledSize: new google.maps.Size(46, 46), // scaled size
		    origin: new google.maps.Point(0,0), // origin
		    anchor: new google.maps.Point(0, 0) // anchor
			};
        // mapInModalMarkerListener(icon, place);

        bigMapMarkerListener(icon, place);
    }

    //Clinic icon
    function createMarkerClinic(place) 
    {

		var icon = {
		    url: "{{asset('assets/images/clinic.png')}}", // url
		    scaledSize: new google.maps.Size(31, 46), // scaled size
		    origin: new google.maps.Point(0,0), // origin
		    anchor: new google.maps.Point(0, 0) // anchor
			};

        // mapInModalMarkerListener(icon, place);

        bigMapMarkerListener(icon, place);
    }

    function createMarker2(place) 
    {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        $('#mapModal').on('hidden.bs.modal', function(e) { marker.setMap(null) });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
          $('#streetView').show();
          renderStreetView(place.geometry.location, 'streetView');

        });
    }

    function bigMapMarkerListener(icon, place)
    {
        var marker = new google.maps.Marker({
          map: map2,
          position: place.geometry.location,
          icon: icon
        });

        markersClinic2.push(marker); //for bigmap

    	google.maps.event.addListener(marker, 'click', function() {
	        infowindow.setContent(place.name);
	    	infowindow.open(map2, this);
	        showStreetView(place.geometry.location, 'bigMapStreetview');
	        
	        getPlaceDetailsBigMap(place.place_id);
	        viewedPlace = place;
        });

        google.maps.event.addListener(marker, 'mouseover', function() {
	        infowindow.setContent(place.name);
	    	infowindow.open(map2, this);
        });
    }

    function mapInModalMarkerListener(icon, place)
    {
    	var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: icon
        });

        markersClinic.push(marker); //for map in modal

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
          $('#streetView').show();
          renderStreetView(place.geometry.location, 'streetView');
        });
    }

    function setMapOnAll(map) 
    {
	    for (var i = 0; i < markersPharma2.length; i++) {
	      markersPharma2[i].setMap(map);
	    }
	    for (var i = 0; i < markersClinic2.length; i++) {
	    	markersClinic2[i].setMap(map);
	    }
	}

    function showStreetView(place, id)
	{
		panorama = new google.maps.StreetViewPanorama(
		      document.getElementById(id), {
		        position: place,
		        pov: {
		          heading: 200,
		          pitch: 0
		        }
		      }
		);
		map2.setStreetView(panorama);
	}

	function calculateDistance(distination, id)
	{
		var service = new google.maps.DistanceMatrixService();
		service.getDistanceMatrix(
		  {
		    origins: [pos, pos],
		    destinations: [distination.geometry.location, distination.geometry.location],
		    travelMode: 'DRIVING',
		    unitSystem: google.maps.UnitSystem.METRIC,
	        avoidHighways: false,
	        avoidTolls: false
		  }, 
		  	function(response, status)
		  	{
		  		var result = response.rows[0].elements;
		  		$(id).html('<b>Distance: </b>' + result[0].distance.text + ' away');
		  		$(id).parent().parent().parent('.pharmacy-panel').attr('data-distance', result[0].distance.value);
		  	}
		  );
	}

	function sortByNearestDistance(place)
	{
		for (var i = 0; i < sample.length; i++) 
		{
			for (var x = i; x < sample.length; x++) 
			{
				if (sample[i] > sample[x+1]) 
				{
					var temp;
					temp = sample[i];
					sample[i] = sample[x+1];
					sample[x+1] = temp;
				}
			}
		}
	}

    function renderStreetView(posTemp, viewId)
    {
    	// console.log(pos1);
    		panorama;
		    panorama = new google.maps.StreetViewPanorama(
		      document.getElementById(viewId), {
		        position: posTemp,
		        pov: {
		          heading: 200,
		          pitch: 0
		        },
		        enableCloseButton: true,
		        fullscreenControl: false
		      }
		      );
		  // map.setStreetView(panorama);
    }
    
    var mapRenderCount = 0;
	function renderMap()//unused
	{
		if (mapRenderCount < 2) 
		{
			$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyCEe9Jl9DxQwW2vDMyd0iUW4TSGYDapeIE&libraries=places&streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76&callback=initMap");
			mapRenderCount++;
		}
	}

	function calculateAndDisplayRoute(directionsService, directionsDisplay, end, distance, timeDriving, timeWalking) 
	{
		directionsDisplay.setMap(map);
		// setMapOnAll(null);
        directionsService.route({
          origin: pos,
          destination: end.geometry.location,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            createMarker2(end);

            $('#mapModal .modal-title').text(end.name);
            $('#startingPoint').html('<label style="display: flex; align-items: center;"> <i class="material-icons">my_location</i>&nbsp Starting point: '+ myAddress +'</label>');
            $('#distination').html('<label style="display: flex; align-items: center;"> <i class="material-icons">location_on</i>&nbsp Distination point: '+ end.vicinity +'</label>');
            $('#distance').html('<label style="display: flex; align-items: center;"> <i class="material-icons">local_movies</i>&nbsp Distance: '+ distance +'</label>');
            $('#time').html('<label style="display: flex; align-items: center;"> <i class="material-icons">timer</i>&nbsp Estemated time:</label> <label style="display: flex; align-items: center;"> <i style="margin-left: 20px;" class="material-icons">drive_eta</i>: &nbsp '+ timeDriving +' </label> <label style="display: flex; align-items: center;"> <i style="margin-left: 20px;" class="material-icons">directions_walk</i>: &nbsp '+ timeWalking +' </label>');

            $('#mapModal').modal('show');

            setTimeout(function(){
            	var bounds = new google.maps.LatLngBounds();
				bounds.extend(pos);
				bounds.extend(end.geometry.location);
				map.fitBounds(bounds);

			},500);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
    }

    function directionView(elmt, end)
    {
    	$(elmt).click(function(){
			$('#streetView').hide();
			
    		timeDistanceCalculator(end);
    		
    	});
    }

    function timeDistanceCalculator(end)
    {
    	var service = new google.maps.DistanceMatrixService();
			service.getDistanceMatrix(
			  {
			    origins: [pos, pos],
			    destinations: [end.geometry.location, end.geometry.location],
			    travelMode: 'DRIVING',
			    unitSystem: google.maps.UnitSystem.METRIC,
		        avoidHighways: false,
		        avoidTolls: false
			  }, 
			  	function(response, status)
			  	{
			  		var result = response.rows[0].elements;
			  		var distance = result[0].distance.text;
			  		var timeDriving = result[0].duration.text;

			  		var service2 = new google.maps.DistanceMatrixService();
					service2.getDistanceMatrix(
					  {
					    origins: [pos, pos],
					    destinations: [end.geometry.location, end.geometry.location],
					    travelMode: 'WALKING',
					    unitSystem: google.maps.UnitSystem.METRIC,
				        avoidHighways: false,
				        avoidTolls: false
					  }, 
					  	function(response, status)
					  	{
					  		var result2 = response.rows[0].elements;
					  		var timeWalking = result2[0].duration.text;
					  		calculateAndDisplayRoute(directionsService, directionsDisplay, end, distance, timeDriving, timeWalking);
					  		$('.moreMapInfo').show();
					  	}
					  );
			  	}
			  );
    }

    function getPlaceDetailsBigMap(place_id)
    {
    	$('#openHoursTable').html('');
    	$('#openNOwTitle').text('');
    	$('#rateTitle').html('');
    	var serviceDetails = new google.maps.places.PlacesService(map2);
    	return serviceDetails.getDetails({
    		placeId: place_id
    	}, function(place, status){
    		
    		$('#placeName').text(place.name);
    		try{
	        	$('#openNOwTitle').html((place.opening_hours.open_now)? '<i style="color: #1bda25">Open now: Yes</i>' : '<i style="color: red">Open now: No</i>');
	        }catch(err){
	        	$('#openNOwTitle').html('<i>Open now: </i>Unknown');
	        }
	        try{
	        	
	        	var time = '';
	        	var schedule = [];
	        	var lastDay = '';
	        	var lastIndex = 0;
	        	var hourLength = (place.opening_hours.weekday_text).length;
	        	var newSched = false;

	        	$(place.opening_hours.weekday_text).each(function(index){

	        		console.log(this);
	        		var data = this.split(':');
	        		var day = data[0];
	        		var tempTime = this.substr((data[0].length + 1), (this.length - 1));
	        		
	        		if (time == tempTime) 
	        		{
	        			lastDay = day;
	        			newSched = true;
	        		}
	        		else
	        		{

	        			try{
	        				if (newSched) 
		        			{
		        				schedule[lastIndex - 1].days = schedule[lastIndex - 1].days + ' to ' + lastDay;
		        			}
	        			}catch(err){}

	        			schedule.push({
	        				days: day,
	        				time: tempTime
	        			});

	        			lastIndex++;

	        			time = tempTime;
	        			newSched = false;
	        			
	        		}

	        		if (index >= (hourLength - 1)) 
	        		{
	        			console.log('lastIndex : ' + lastIndex);
	        			console.log(schedule);
	        			if (newSched) 
	        			{
	        				schedule[lastIndex - 1].days = schedule[lastIndex - 1].days + ' to ' + lastDay;
	        			}
	        			
	        			appendHtmlTimeSched(schedule);
	        		}

		        });

	        }catch(err){
	        	$('#openHoursTable').append('<tr> <td>No open hours available</td> </tr>');
	        }
	        try{
	        	if (place.rating == undefined) return;
	        	$('#rateTitle').html('<i>Rating: ' + place.rating + '</i>');
	        }catch(err){}
    	});
    }

    function appendHtmlTimeSched(data)
    {
    	$(data).each(function(){
    		var html = '<tr>' +
	    					'<td>' + this.days + '</td>' +
	    					'<td>' + this.time + '</td>' +
	    				'</tr>';
	    	$('#openHoursTable').append(html);
    	});
    }
	// renderMap();
</script>