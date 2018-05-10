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

	var disqusPublicKey = "zXEiWFfA1G7Iq0lHShuKPGlQc2WBebpuEXjHjaLFVps18BQ3bzL5sOWb3cs573lD";

	// RECOMMENDS == LIKES

	function searchMedSortByRecommends(searchedData)
	{
		var urlArray = [];
		// appendSearchedData(searchedData);
		for (var i = 0; i < searchedData.length; i++) 
		{
			urlArray.push('link:' + 'https://terheamed.com#!commentPanel' + searchedData[i].id);

			if (i >= (searchedData.length - 1)) 
			{
				getRecommends(urlArray, searchedData);
			}
		}
		
		if (searchedData.length <= 0) 
		{
			appendSearchedData(searchedData);
		}
		
	}

	function getRecommends(urlArray, searchedData)
	{
		$.ajax({
	       type: 'GET',
	       url: "https://disqus.com/api/3.0/threads/set.jsonp",
	       data: { api_key: disqusPublicKey, forum : disqus_shortname, thread : urlArray }, // URL method
	       cache: false,
	       dataType: 'jsonp',
	       success: function (result) {

	       		console.log(result.response);
	       		var medThatHaveLikes = [];
	            for (var i in result.response) 
	            {
	            	var identifierCharLength = result.response[i].identifiers[0].length;
	                var searchID = (result.response[i].identifiers[0]).substr(12, identifierCharLength);
	                var likes = result.response[i].likes;

	                medThatHaveLikes.push({
	                	id: searchID,
	                	likes: likes
	                });

	                if (i >= ((result.response).length - 1)) 
					{
						appendFirstThatHaveLikes(medThatHaveLikes, searchedData);
					}

	            }

	            if ((result.response).length <= 0) 
	            {
	            	appendSearchedData(searchedData);
	            }
	        },
	        error: function(){
	        	appendSearchedData(searchedData);
	        }
	    });
	}

	function appendFirstThatHaveLikes(medThatHaveLikes, searchedData)
	{
		medThatHaveLikes.sort(function(a, b){
			return parseFloat(b.likes) - parseFloat(a.likes)
		});
		
		for (var i in medThatHaveLikes) 
		{
			var ID = medThatHaveLikes[i].id;
			for (var x in searchedData) 
			{
				if (ID == searchedData[x].id) 
				{
					appendHtmlSearchedMed(searchedData[x]);
				}
			}

			if (i >= (medThatHaveLikes.length - 1)) 
			{
				appendSearchedData(searchedData);
			}

		}

	}

	function appendSearchedData(data)
	{
		$('.card-panel-medicine').show();
		$('.card-specific-med').hide();
		$('.man-loader').css('display', 'none');

		if (data.length <= 0) 
		{
			var html = '<div class="welcome-card">' +
				  		'<p>Your search did not match any information in our database.</p>' +
	  					'<ul>' +
	  						'<li>Make sure that all words are spelled correctly.</li>' +
	  						'<li>Try different keywords.</li>' +
	  						'<li>Try more general keywords.</li>' +
	  					'</ul>' +
				  	'</div>';

			$('#searchedPanel').append(html);
		}
		// console.log(data);
		for (var i = 0; i < data.length; i++) 
		{
			
			appendHtmlSearchedMed(data[i]);
			
		}
	}

	function appendHtmlSearchedMed(data)
	{
		var description = (data.category_id == 2)? data.purpose : data.desc;  
		description = (description.length > 264)? description.substr(0, 264) + '...' : description;

		var htmlAppend =  	'<div data-id="'+ data.id +'" class="man-card searchCard">' +
									'<div class="man-row">' +
								  		'<div class="col-md-4 man-img-med-shell">' +
									  			'<img src="'+ data.picture +'" style="width: 100%;">' +
									  	'</div>' +
									  	'<div class="col-md-8">' +
									  		'<div class="card-title"><b>'+ data.name +'</b></div>' +
									  		'<p style="font-size: 15px;">'+ description +'</p>' +
									  	'</div>' +
							  		'</div>' +
							  		'<div class="see-more-card">' +
							  			'<div class="see-more-btnn" onclick="view_medicine('+ data.id +')">Click me to see more</div>' +
							  			'<div class="more-btnn" id="morevertBtn'+ data.id +'">' +
							  				'<i class="material-icons">more_vert</i>' +
							  			'</div>' +
							  		'</div>' +
							  		'<div class="med-footer">' +
						  				'<div class="row">' +
											'<button type="button" class="btn btn-light col-md-12 commentBtn" onclick="loadDisqus('+ "'" +'#commentPanel' + data.id +"'" +', '+ "'" +'commentPanel' + data.id +"'" +', '+ "'" +'https://terheamed.com#!commentPanel' + data.id +"'" +')">' +
											  'Reviews' +
											'</button>' +
						  				'</div>' +
						  			'</div>' +
						  			'<div class="col-md-12 comment-section">' +
						  				'<div id="commentPanel'+ data.id +'"></div>' +
		  							'</div>' +
							  	'</div>';

			var duplicateChecker = true;
			$( ".searchCard" ).each(function( index ) {

				if ($(this).attr('data-id') == data.id) 
				{
					duplicateChecker = false;
				}
				
			});

			if (duplicateChecker) 
			{
				$('#searchedPanel').append(htmlAppend);

				var popoverElmt = $('#morevertBtn' + data.id);
		      	popoverElmt.attr({'data-toggle' : 'popover', 'data-placement': 'bottom', 'data-content' : '<a href="{{ url('viewmed') }}/'+ data.id +'" style="text-decoration: none;" target="_blank" class="man-list-btn" onclick="" ><i class="material-icons">tab</i>&nbsp open in new tab</a>'
		  						});
		      	appendPopover(popoverElmt);
			}
	}


</script>