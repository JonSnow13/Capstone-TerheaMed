<script type="text/javascript">
	function appearanceManager() 
	{
		@if (Request::is('seebigmap'))
			seeAllPharmaClinic();
		@endif
	}

	function goMapToChange()
	{
		document.getElementById('changeLocRadio').checked = true;
		document.getElementById('searchEstablishmentRadio').checked = false;
		seeAllPharmaClinic();
		setTimeout(function(){
			document.getElementById('pac-input').focus();
		},500);
	}

	function sortPharmacyClinic()
	{
		$('.pharmacy-panel').sort(function(a,b) {
		     return parseInt(a.dataset.distance) > parseInt(b.dataset.distance);
		}).appendTo('#panel-1');
	}

</script>