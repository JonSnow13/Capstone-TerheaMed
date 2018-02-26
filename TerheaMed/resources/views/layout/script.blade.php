<script type="text/javascript">
	var windowHeight = $( window ).height();
	$(function(){

		// $('#mapModal').modal('show');

		var loaderWidth = $(".card-panel-medicine").css('width');
		console.log(loaderWidth);

		setTimeout(function(){
			$('.man-loader').css({'height' : windowHeight+'px'});

		},100)

		$('.navbar').scrollToFixed();
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

	function getClassOfPharmaPanel()
	{
		var secondToLastElement = $('.pharmacy-panel').eq(-2);

            secondToLastElement.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});

        var lastElement = $('.pharmacy-panel').eq(-1);
        	lastElement.scrollToFixed ({
                marginTop: $('.pharmacy-panel').eq(-2). outerHeight (true) + 65
        	});
	}

	function getClassOfHospitalPanel()
	{

        var secondToLastClinic = $('.pharmacy-panel-2').eq(-2);
        	secondToLastClinic.scrollToFixed ({
                marginTop: $ ( '.navbar'). outerHeight (true) + 10
        	});

        var lastClinic = $('.pharmacy-panel-2').eq(-1);
        	lastClinic.scrollToFixed ({
                marginTop: $('.pharmacy-panel-2').eq(-2). outerHeight (true) + 65
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
</script>