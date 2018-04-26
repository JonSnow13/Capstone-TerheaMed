<script type="text/javascript">
	var bigVideoWidth = $('.big-video-container').width();
	$(function(){
		
		$('[data-toggle="tooltip"]').tooltip();

		$('.big-video-container').css('height', (bigVideoWidth * .5) + 'px');

		var sourceVideo;
		$('.video-cup').hover(function(){

			sourceVideo = $(this).siblings('iframe').attr('src');
			$(this).siblings('iframe').attr('src', sourceVideo + '?autoplay=1;mute=1');
			
		}, function(){

			$(this).siblings('iframe').attr('src', sourceVideo);

		});


	});

</script>