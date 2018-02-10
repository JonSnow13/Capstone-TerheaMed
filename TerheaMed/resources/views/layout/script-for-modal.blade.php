<script type="text/javascript">

	var windowHeight = $( window ).height();
	var	mapHeight = windowHeight * .70;
	var windowWidth = $(window).width();
	var streetViewWidth = windowWidth * .30; 

	$('.man-map').css('height', mapHeight+'px');
	$('#streetView').css({'height' : (mapHeight*.60)+'px', 'width' : streetViewWidth+'px'});

	function locationView()
	{
		renderMap();
		$('#mapModal').modal('show');
	}

	var map, infoWindow, pos, service;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });


        // map = new google.maps.Map(document.getElementById('map'));
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            
            infoWindow.setPosition(pos);
            infoWindow.setContent('<i class="material-icons">my_location</i> your location');
            infoWindow.open(map);


     //        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
		  	var marker = new google.maps.Marker({
		    	position: pos,
		    	map: map,
		    	icon: '{{asset('assets/images/my_location.png')}}'
		  	});
            map.setCenter(pos);


//=======================================================================
	     	infowindow = new google.maps.InfoWindow();
	        var service = new google.maps.places.PlacesService(map);
	        service.nearbySearch({
	          location: pos,
	          radius: 3000,
	          type: ['pharmacy']
	        }, callbackPharmacy);


	        var service2 = new google.maps.places.PlacesService(map);
	        service2.nearbySearch({
	          location: pos,
	          radius: 3000,
	          type: ['hospital']
	        }, callbackClinic);
//==========================================================================



          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }


      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }



      	function callbackPharmacy(results, status) {
		  if (status == google.maps.places.PlacesServiceStatus.OK) {
		    for (var i = 0; i < results.length; i++) {
		      var place = results[i];
		      console.log(place);
		      createMarker(results[i]);

		      $('#panel-1').append('<div class="pharmacy-panel"><div class="img-box" id="pharma'+i+'"></div><div class="card-body"><h6 class="pharma-title">'+ place.name +'</h6><div class="man-row location-label" onclick="locationView()"><i class="material-icons location-pointer">location_on</i><p class="distance-label"><b>Distance: </b>150m away from your location</p></div></div></div>');

		      // renderStreetView(results[i].geometry.location, 'pharma'+i);
		    }
		    
		    getClassOfPharmaPanel();
		  }
		}

		function callbackClinic(results, status) {
		  if (status == google.maps.places.PlacesServiceStatus.OK) {
		    for (var i = 0; i < results.length; i++) {
		      var place = results[i];
		      // console.log(place);
		      // createMarker(results[i]);

		     $('#panel-2').append('<div class="pharmacy-panel-2"><img class="card-img-top" src="{{asset('assets/images/mercury.jpg')}}" alt="Card image cap"><div class="card-body"><h6 class="pharma-title">'+ place.name +'</h6><div class="man-row location-label" onclick="locationView()"><i class="material-icons location-pointer">location_on</i><p class="distance-label"><b>Distance: </b>150m away from your location</p></div></div></div>');
		      
		    }
		    getClassOfHospitalPanel();
		  }
		}

		function createMarker(place) {
	        var placeLoc = place.geometry.location;
	        var marker = new google.maps.Marker({
	          map: map,
	          position: place.geometry.location
	        });

	        google.maps.event.addListener(marker, 'click', function() {
	          infowindow.setContent(place.name);
	          infowindow.open(map, this);
	          renderStreetView(place.geometry.location, 'streetView');
	          $('#mapModal .modal-title').text(place.name)
	        });
	    }

	    function renderStreetView(pos1, viewId)
	    {
			  var panorama = new google.maps.StreetViewPanorama(
			      document.getElementById(viewId), {
			        position: pos1,
			        pov: {
			          heading: 34,
			          pitch: 10
			        },
			        enableCloseButton: true
			      }
			      );
			  map.setStreetView(panorama);
	    }

    var mapRenderCount = 0;
	function renderMap()
	{
		if (mapRenderCount < 2) 
		{
			$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyCEe9Jl9DxQwW2vDMyd0iUW4TSGYDapeIE&libraries=places&streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76&callback=initMap");
			mapRenderCount++;
		}
	}
	renderMap();
</script>