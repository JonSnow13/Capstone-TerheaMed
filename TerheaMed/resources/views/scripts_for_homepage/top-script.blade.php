<script type="text/javascript">

	var windowHeight = $( window ).height();
	var	mapHeight = windowHeight * .70;
	var	mapHeight2 = windowHeight * .91;
	var windowWidth = $(window).width();
	var streetViewWidth = windowWidth * .30; 
	
	$(function(){
		
		@if ($searchName)
			$('#searchBox').val('{{ $searchName }}');
			console.log('{{ $searchName }}');
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
	    }
	    else
	    {
    		$('#medicinePanel').attr('class', 'col-md-6');
	    	$('.man-loader').attr('class', 'man-loader col-md-6');
	    	$('.pharma-clinic-panel').show();
	    	$('#medicinePanel').show();
	    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
	    	$('#searchBoxForm').attr('class', 'man-search-form');
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
		    }
		    else
		    {
		    	$('#medicinePanel').attr('class', 'col-md-6');
		    	$('.man-loader').attr('class', 'man-loader col-md-6');
		    	$('.pharma-clinic-panel').show();
		    	$('#medicinePanel').show();
		    	$('.pharma-clinic-panel').attr('class', 'pharma-clinic-panel col-md-6');
		    	$('#searchBoxForm').attr('class', 'man-search-form');
		    }
		};
		
	});

	var disqus_shortname = 'terheamed';
	var disqus_identifier;
	var disqus_url;

	function loadDisqus(source, identifier, url) {

		var commentSection = $(source).parent('.comment-section');
    	if (!commentSection.hasClass('man-show')) 
    	{
    		commentSection.prev('.med-footer').find('.commentBtn').append('<img src="{{asset('assets/images/busy.gif')}}" style="width: 8%">');


			if (window.DISQUS) {
			   jQuery('#disqus_thread').insertAfter(source);
			   /** if Disqus exists, call it's reset method with new parameters **/

			    DISQUS.reset({
				  reload: true,
				  config: function () { 
				   this.page.identifier = identifier.toString();    //important to convert it to string
				   this.page.url = url;
				  }
				 });
			} else {
			//insert a wrapper in HTML after the relevant "show comments" link

			   jQuery('<div id="disqus_thread"></div>').insertAfter(source);
			   disqus_identifier = identifier; //set the identifier argument
			   disqus_url = url; //set the permalink argument
			   //append the Disqus embed script to HTML
			   var dsq = document.createElement('script'); 
			   dsq.type = 'text/javascript'; 
			   dsq.async = true;
			   dsq.src = 'https://'+ disqus_shortname +'.disqus.com/embed.js';
			   jQuery('head').append(dsq);
			}

	    	setTimeout(function(){

	    		commentSection.addClass('man-show');

				commentSection.siblings('.med-footer').find('.commentBtn').find('img').remove();

	    	},1000);
    	}
    	else
    	{
    		commentSection.animate({
				height: "0px"
			},400);

    		setTimeout(function(){
    			commentSection.removeClass('man-show');
    			commentSection.css('height', '100%');
    		},430);
    	}
	};


</script>