<script type="text/javascript">
	var windowHeight = $( window ).height();
	var pharmaPlace;
	var clinicPlace;

	$(function(){
		// $('#mapModal').modal('show');
		// $('#pharmacy-section-holder').scrollToFixed();
		

		// var lastElement = $('.pharmacy-container .pharmacy-panel:last-child');
		// $(window).scroll(function(){
		// 	if ($(window).scrollTop() > 2) 
		// 	{
		// 		$('.navbar').addClass('man-fixed-top');
		// 	}
		// 	else
		// 	{
		// 		$('.navbar').fadeOut(50);
		// 		$('.navbar').removeClass('man-fixed-top');
		// 		setTimeout(function(){
		// 			$('.navbar').fadeIn();
		// 		},20);
		// 	}
		// 	// var lastElement = $('.pharmacy-container .pharmacy-panel:last-child');
		// 	// if (isScrolledIntoView($('.aaa'))) 
		// 	// {
		// 	// 	$('#pharmacy-section-holder').addClass('pharma-fixed-top');
		// 	// 	var name = lastElement.find('.pharma-title').text();
		// 	// 	console.log(name);
		// 	// }
		// 	// else
		// 	// {
		// 	// 	$('#pharmacy-section-holder').removeClass('pharma-fixed-top');
		// 	// }
		// });

		// function isScrolledIntoView(elem){
		//     var $elem = $(elem);
		//     var $window = $(window);

		//     var docViewTop = $window.scrollTop();
		//     var docViewBottom = docViewTop + $window.height();

		//     var elemTop = $elem.offset().top;
		//     var elemBottom = elemTop + $elem.height();

		//     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		// }

	});

	function getClassOfPharmaPanel()//unused
	{
		var secondToLastElement = $('.pharmacy-panel').eq(-3);

            secondToLastElement.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});

        var lastElement = $('.pharmacy-panel').eq(-2);
        	lastElement.scrollToFixed ({
                marginTop: $('.pharmacy-panel').eq(-3). outerHeight (true) + 65
        	});
	}

	function getClassOfHospitalPanel()//unused
	{

        var secondToLastClinic = $('.clinic-panel').eq(-3);
        	secondToLastClinic.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});

        var lastClinic = $('.clinic-panel').eq(-2);
        	lastClinic.scrollToFixed ({
                marginTop: $('.clinic-panel').eq(-3). outerHeight (true) + 65
        	});
	}

	function view_medicine()
	{
		$('.man-loader').css('display', 'flex');
		setTimeout(function(){
			$('.man-loader').css('display', 'none');
			$('.card-panel-medicine').hide();
			$('.card-specific-med').show();
		},800);
		// $('.card-panel-medicine').hide();

	}

	function backToAllSearchMed()
	{
		$('.man-loader').css('display', 'flex');
		setTimeout(function(){
			$('.man-loader').css('display', 'none');
			$('.card-specific-med').hide();
			$('.card-panel-medicine').show();
		},800);
		
	}

	function showPharmacy()
	{
		$('#medicinePanel').hide();
		$('.pharma-clinic-panel').show();
		$('#burgerMenu').addClass('collapsed');
		$('#navbarTogglerDemo02').removeClass('show');
		// for (var i = 0; i < 6; i++) {
		// 	showStreetView(pharmaPlace[i], 'pharma'+i);
		// }
		// for (var i = 0; i < 6; i++) {
		// 	showStreetView(clinicPlace[i], 'clinic'+i);
		// }
	}

	function loadMore(elm, option)
	{
		$(elm).find('.loader-more').show();
		setTimeout(function(){
			if (option == 'pharma') 
			{
				pharmaLoadMore();
			}
			else
			{
				clinicLoadMore();
			}
			$(elm).find('.loader-more').hide();
		},1000);
	}

	function clinicLoadMore()
	{
		var count  = ($('#panel-2 .clinic-panel').length);

		if (count < clinicPlace.length) 
		{
			var remaining = clinicPlace.length - count;
			var execute;
			if (remaining > 0) 
			{
				if (remaining < 5) 
				{
					execute = clinicPlace.length;
				}
				else
				{
					execute = count + 5;
				}
			}
			for (var i = count; i < execute; i++) 
			{
				var place = clinicPlace[i];
				var bgColor = getRandomColor();
		      	var textColor = getContrastYIQ(bgColor);

		      	var cardView = '<div class="clinic-panel">' +
								'<div class="img-box" style="background: #'+ bgColor +'; color: '+ textColor +'" id="clinic'+i+'" >' +
									'<h6 class="pharma-title">'+ place.name +'</h6>' +
								'</div>' +
								'<div class="man-card-body">' +
									'<div class="distance-view" id="directionViewX'+i+'">' +
										'<i class="material-icons location-pointer">location_on</i>' +
										'<p class="distance-label" id="clinicX'+ i +'"></p>' +
									'</div>' +
									'<div class="option-view">' +
										'<i class="material-icons">more_vert</i>' +
									'</div>' +
								'</div>' +
							'</div>';

		      	$('#panel-2').append(cardView);

				// showStreetView(place, 'pharma'+i);
		      	calculateDistance(place, '#clinicX'+i);
		      	directionView('#directionViewX'+i, place);
			}
			// getClassOfPharmaPanel();
		}
	}

	function pharmaLoadMore()
	{
		var count  = ($('#panel-1 .pharmacy-panel').length);

		if (count < pharmaPlace.length) 
		{
			var remaining = pharmaPlace.length - count;
			var execute;
			if (remaining > 0) 
			{
				if (remaining < 5) 
				{
					execute = pharmaPlace.length;
				}
				else
				{
					execute = count + 5;
				}
			}
			for (var i = count; i < execute; i++) 
			{
				var place = pharmaPlace[i];
				var bgColor = getRandomColor();
		      	var textColor = getContrastYIQ(bgColor);

		      	var cardView = '<div class="pharmacy-panel">' +
								'<div class="img-box" style="background: #'+ bgColor +'; color: '+ textColor +'" id="pharma'+i+'" >' +
									'<h6 class="pharma-title">'+ place.name +'</h6>' +
								'</div>' +
								'<div class="man-card-body">' +
									'<div class="distance-view" id="directionView'+i+'">' +
										'<i class="material-icons location-pointer">location_on</i>' +
										'<p class="distance-label" id="pharmaD'+ i +'"></p>' +
									'</div>' +
									'<div class="option-view">' +
										'<i class="material-icons">more_vert</i>' +
									'</div>' +
								'</div>' +
							'</div>';

		      	$('#panel-1').append(cardView);

				// showStreetView(place, 'pharma'+i);
		      	calculateDistance(place, '#pharmaD'+i);
		      	directionView('#directionView'+i, place);
			}
			// getClassOfPharmaPanel();
		}
	}

	function getContrastYIQ(hexcolor){
		var r = parseInt(hexcolor.substr(0,2),16);
		var g = parseInt(hexcolor.substr(2,2),16);
		var b = parseInt(hexcolor.substr(4,2),16);
		var yiq = ((r*299)+(g*587)+(b*114))/1000;
		return (yiq >= 128) ? 'black' : 'white';
	}

	//random color generator
	function getRandomColor() {
	  var letters = '0123456789ABCDEF';
	  var color = '';
	  for (var i = 0; i < 6; i++) {
	    color += letters[Math.floor(Math.random() * 16)];
	  }
	  return color;
	}

</script>