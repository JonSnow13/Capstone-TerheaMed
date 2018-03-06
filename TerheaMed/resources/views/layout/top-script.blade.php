<script type="text/javascript">
	
	$(function(){
	

		$('.navbar').scrollToFixed();
		var pharmaClinicPanel = $('.pharma-clinic-panel');
		pharmaClinicPanel.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});

		pharmaClinicPanel.css('max-height', (windowHeight - 150));

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
	    	$('.add-menu-for-mobile').show();
	    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-12');
	    	pharmaClinicPanel.removeAttr('style');
	    	$('.pharma-clinic-panel').hide();
	    }
	    else
	    {
    		$('#medicinePanel').attr('class', 'col-md-6');
	    	$('.man-loader').attr('class', 'man-loader col-md-6');
	    	$('.pharma-clinic-panel').show();
	    	$('#medicinePanel').show();
	    	$('.add-menu-for-mobile').hide();
	    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
	    }

		window.onresize = function(event) {
		    windowWidth = $( window ).width();
		    pharmaClinicPanel.css('max-height', (windowHeight - 150));
		    if (windowWidth <= 980) 
		    {
		    	$('#medicinePanel').attr('class', 'col-md-12');
		    	$('.man-loader').attr('class', 'man-loader col-md-12');
		    	$('.add-menu-for-mobile').show();
		    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-12');
		    	pharmaClinicPanel.removeAttr('style');
		    	$('.pharma-clinic-panel').hide();
		    }
		    else
		    {
		    	$('#medicinePanel').attr('class', 'col-md-6');
		    	$('.man-loader').attr('class', 'man-loader col-md-6');
		    	$('.pharma-clinic-panel').show();
		    	$('#medicinePanel').show();
		    	$('.add-menu-for-mobile').hide();
		    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
		    }
		};

	})

</script>