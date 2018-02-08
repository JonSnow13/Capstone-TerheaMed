<script type="text/javascript">
	$(function(){

		var lastElement = $('.pharmacy-container .pharmacy-panel:last-child');
		$(window).scroll(function(){
			if ($(window).scrollTop() > 2) 
			{
				$('.navbar').addClass('man-fixed-top');
			}
			else
			{
				$('.navbar').fadeOut(50);
				$('.navbar').removeClass('man-fixed-top');
				setTimeout(function(){
					$('.navbar').fadeIn();
				},20);
			}
			// var lastElement = $('.pharmacy-container .pharmacy-panel:last-child');
			// if (isScrolledIntoView($('.aaa'))) 
			// {
			// 	$('#pharmacy-section-holder').addClass('pharma-fixed-top');
			// 	var name = lastElement.find('.pharma-title').text();
			// 	console.log(name);
			// }
			// else
			// {
			// 	$('#pharmacy-section-holder').removeClass('pharma-fixed-top');
			// }
		});

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
</script>