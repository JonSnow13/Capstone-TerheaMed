<script type="text/javascript">
	
	$(function(){

		retrieveHealthTips();

	});

	//unused
	function retrieveHealthTips()
	{
		@if ($healthTips)

			@for ($i = 0; $i < count($healthTips); $i++)
				console.log( '{{$healthTips[$i]->name}}' );
			@endfor

		@endif
	}

</script>