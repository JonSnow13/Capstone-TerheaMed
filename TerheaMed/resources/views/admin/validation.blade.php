<script type="text/javascript">

	var reqMsg = 'This field is required';

	function isNullOrWhitespace( input ) 
	{

	    if (typeof input === 'undefined' || input == null) return true;

	    return input.replace(/\s/g, '').length < 1;
	}
	
	function validateMedData()
	{
		var name = $('#name');
		var brandName = $('#brandName');
		var type = $('#type');
		var minAge = $('#minAge');
		var maxAge = $('#maxAge');
		var directionOfUse = $('#directionOfUse');
		var desc = $('#desc');
		var purpose = $('#purpose');
		var takers = $('#takers');

		$('.err-msg').text('');
		var valid = true;

		if (isNullOrWhitespace(name.val())) 
		{
			name.siblings('.err-msg').text(reqMsg);
			valid = false;
		}
		if (isNullOrWhitespace(brandName.val())) 
		{
			brandName.siblings('.err-msg').text(reqMsg);
			valid = false;
		}
		if (isNullOrWhitespace(directionOfUse.val())) 
		{
			directionOfUse.siblings('.err-msg').text(reqMsg);
			valid = false;
		}
		if (isNullOrWhitespace(desc.val())) 
		{
			desc.siblings('.err-msg').text(reqMsg);
			valid = false;
		}
		if (isNullOrWhitespace(purpose.val())) 
		{
			purpose.siblings('.err-msg').text(reqMsg);
			valid = false;
		}
		if (isNullOrWhitespace(takers.val())) 
		{
			takers.siblings('.err-msg').text(reqMsg);
			valid = false;
		}

		return valid;
	}

</script>