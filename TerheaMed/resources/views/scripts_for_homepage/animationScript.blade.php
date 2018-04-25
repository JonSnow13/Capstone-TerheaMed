<script type="text/javascript">
	var interval;
	function personWavingRandom()
	{
		
		try{
			clearInterval(interval);
		}catch(err){}

		var SHINE_DURATION = 5000;

		var items = $('.person-waving');
		var n = items.length;
		var current = $();
		console.log(n);

		interval = setInterval(function() {
			current = $(items.get(randomIndex(n)));
			current.addClass('wave');
			setTimeout(function(){
				current.removeClass('wave');
			},4000);
		}, SHINE_DURATION);

		function randomIndex(n) {
		    return Math.floor(Math.random() * (n - 1));
		}
	}

</script>