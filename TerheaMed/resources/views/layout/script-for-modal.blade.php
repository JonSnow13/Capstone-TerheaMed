<script type="text/javascript">

	var windowHeight = $( window ).height();
	var	mapHeight = windowHeight * .70;
	var	mapHeight2 = windowHeight * .91;
	var windowWidth = $(window).width();
	var streetViewWidth = windowWidth * .30; 

	$('.man-map').css('height', mapHeight+'px');
	$('.big-map-panel').css('height', mapHeight2+'px');
	$('#seeAllMap').css('height', mapHeight2+'px');
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
		setMapOnAll(map2);
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
		$('.big-map-panel').removeClass('show');
		setTimeout(function(){
			$('.big-map-panel').css('display', 'none');
			$('#medicinePanel').fadeIn();
			$('.pharma-clinic-panel').fadeIn();
		},820);
	}

	var map, infoWindow, pos, service, map2;
	var myAddress;
	var directionsDisplay;
	var directionsService;
	var markers = []; //pharma marker
	var markersClinic = [] //clinic marker
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

        directionsDisplay = new google.maps.DirectionsRenderer;
        directionsService = new google.maps.DirectionsService;
        // map = new google.maps.Map(document.getElementById('map'));
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            
            var geocoder = new google.maps.Geocoder;
            geocoder.geocode({'location': pos}, function(results, status) {
		      if (status == google.maps.GeocoderStatus.OK) 
		      	{
		      		// console.log(results);
			      myAddress = results[0].address_components[0].short_name;
			    }
			    else
			    {
			    	myAddress = 'Dipolog City'
			    }
			});
            
            // infoWindow.setPosition(pos);
            // infoWindow.setContent('<i class="material-icons">my_location</i> your location');
            // infoWindow.open(map);


     //        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
     		var icon = {
				    url: "{{asset('assets/images/pulse_dot.gif')}}", // url
				    scaledSize: new google.maps.Size(28, 28), // scaled size
				    origin: new google.maps.Point(0,0), // origin
				    anchor: new google.maps.Point(0, 0) // anchor
					};
		  	var marker = new google.maps.Marker({
		    	position: pos,
		    	map: map,
		    	icon: icon
		  	});
		  	var marker2 = new google.maps.Marker({
		    	position: pos,
		    	map: map2,
		    	icon: icon
		  	});
            map.setCenter(pos);
            map2.setCenter(pos);


//=======================================================================
	     	infowindow = new google.maps.InfoWindow();
	        var service = new google.maps.places.PlacesService(map);
	        service.nearbySearch({
	          location: pos,
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
	          location: pos,
	          rankBy: google.maps.places.RankBy.DISTANCE,
	          type: ['hospital']
	        }, callbackClinic);
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
	  if (status == google.maps.places.PlacesServiceStatus.OK) {
	  	pharmaPlace = results;

	  	$.each(results, function(i, val){
				createMarker(this);
			});

	    for (var i = 0; i < 5; i++) {
	      var place = results[i];
	      // createMarker(place);

	      	// showStreetView(place, 'pharma'+i);
	      	appendPharmacyHtml(place, i);

	      // renderStreetView(results[i].geometry.location, 'pharma'+i);
	    }
	    
	    // getClassOfPharmaPanel();
	    // sortByNearestDistance(results);

	  }
	  personWavingRandom();
	}

	function callbackClinic(results, status) {

		if (status == google.maps.places.PlacesServiceStatus.OK) {
			clinicPlace = results;
			$.each(results, function(i, val){
				createMarkerClinic(this);
			});

		    for (var i = 0; i < 5; i++) {
		      var place = results[i];
		      // console.log(place);
		      // createMarker(results[i]);
		      appendClinicHtml(place, i);
		      
		    }
		    // getClassOfHospitalPanel();
		}
		personWavingRandom();
	}

	//Pharma icon
	function createMarker(place) {

		var icon = {
		    url: "{{asset('assets/images/pharma_icon.png')}}", // url
		    scaledSize: new google.maps.Size(46, 46), // scaled size
		    origin: new google.maps.Point(0,0), // origin
		    anchor: new google.maps.Point(0, 0) // anchor
			};
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: icon
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
          $('#streetView').show();
          renderStreetView(place.geometry.location, 'streetView');
          $('#mapModal .modal-title').text(place.name);
        });
    }

    //Clinic icon
    function createMarkerClinic(place) {

		var icon = {
		    url: "{{asset('assets/images/clinic.png')}}", // url
		    scaledSize: new google.maps.Size(31, 46), // scaled size
		    origin: new google.maps.Point(0,0), // origin
		    anchor: new google.maps.Point(0, 0) // anchor
			};
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: icon
        });

        markersClinic.push(marker);

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
          $('#streetView').show();
          renderStreetView(place.geometry.location, 'streetView');
          $('#mapModal .modal-title').text(place.name);
        });
    }

    function createMarker2(place) {
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

    function setMapOnAll(map) 
    {
	    for (var i = 0; i < markers.length; i++) {
	      markers[i].setMap(map);
	    }
	    for (var i = 0; i < markersClinic.length; i++) {
	    	markersClinic[i].setMap(map);
	    }
	}

    function showStreetView(place, id)
	{
		    panorama = new google.maps.StreetViewPanorama(
		      document.getElementById(id), {
		        position: place.geometry.location,
		        disableDefaultUI: true,
		      }
		      );
		  map.setStreetView(panorama);
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
		          heading: 280,
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
		setMapOnAll(null);
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
    		
    	});
    }

	// renderMap();
</script>