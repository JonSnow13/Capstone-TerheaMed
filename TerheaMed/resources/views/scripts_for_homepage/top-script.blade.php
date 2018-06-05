<script type="text/javascript">

	var windowHeight = $( window ).height();
	var	mapHeight = windowHeight * .70;
	var	mapHeight2 = windowHeight * .91;
	var windowWidth = $(window).width();
	var streetViewWidth = windowWidth * .30; 
	var resultRearchData = [];
	
	$(function(){

		$('[data-toggle="popover"]').popover();

		@if ($searchName)
			$('#searchBox').val('{{ $searchName }}');
		@endif

		$('[data-toggle="tooltip"]').tooltip();

		// $('#openHoursModal').modal('show');
		// $('.navbar').scrollToFixed();
		var pharmaClinicPanel = $('.pharma-clinic-panel');
		pharmaClinicPanel.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});
		
		var minusHeight = windowHeight * .10;
		pharmaClinicPanel.css('max-height', (windowHeight - minusHeight));

		var loaderWidth = $(".card-panel-medicine").css('width');
		// console.log(loaderWidth);

		setTimeout(function(){
			$('.man-loader').css({'height' : windowHeight+'px'});

		},100)

		var windowWidth = $( window ).width();

		// $('.modal-lg').css({'height' : windowHeight + 'px', 'max-width' : windowWidth + 'px'});

		if (windowWidth <= 980) 
	    {
	    	$('#medicinePanel').attr('class', 'col-md-12');
	    	$('.man-loader').attr('class', 'man-loader col-md-12');
	    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-12');
	    	pharmaClinicPanel.removeAttr('style');
	    	$('.pharma-clinic-panel').hide();
	    	$('#searchBoxForm').attr('class', 'form-group');
	    	$('#bigMapPlaceDetails').prop('class', 'col-md-12');
	    	$('#seeAllMap').prop('class', 'col-md-12');	    }
	    else
	    {
    		$('#medicinePanel').attr('class', 'col-md-6');
	    	$('.man-loader').attr('class', 'man-loader col-md-6');
	    	$('.pharma-clinic-panel').show();
	    	$('#medicinePanel').show();
	    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
	    	$('#searchBoxForm').attr('class', 'man-search-form');
	    	$('#bigMapPlaceDetails').attr('class', 'col-md-3');
	    	$('#seeAllMap').attr('class', 'col-md-9');
	    }

		window.onresize = function(event) {
		    windowWidth = $( window ).width();
		    pharmaClinicPanel.css('max-height', (windowHeight - 150));
		    if ($('.big-map-panel').hasClass('show')) 
		    {
		    	return false;
		    }
		    if (windowWidth <= 980) 
		    {
		    	$('#medicinePanel').attr('class', 'col-md-12');
		    	$('.man-loader').attr('class', 'man-loader col-md-12');
		    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-12');
		    	pharmaClinicPanel.removeAttr('style');
		    	$('.pharma-clinic-panel').hide();
		    	$('#searchBoxForm').attr('class', 'form-group');
		    	$('#bigMapPlaceDetails').attr('class', 'col-md-12');
		    	$('#seeAllMap').attr('class', 'col-md-12');
		    }
		    else
		    {
		    	$('#medicinePanel').attr('class', 'col-md-6');
		    	$('.man-loader').attr('class', 'man-loader col-md-6');
		    	$('.pharma-clinic-panel').show();
		    	$('#medicinePanel').show();
		    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
		    	$('#searchBoxForm').attr('class', 'man-search-form');
		    	$('#bigMapPlaceDetails').attr('class', 'col-md-3');
		    	$('#seeAllMap').attr('class', 'col-md-9');
		    }
		};
		
	});

	function errorAlert()
	{
		swal("Whoops!", "An error has occured. Please try again, otherwise reload the page.", "error");
	}


</script>