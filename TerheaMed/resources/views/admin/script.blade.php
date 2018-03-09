<script type="text/javascript">
	
	function readURL(input) 
	{
		if (input.files && input.files[0]) 
		{
		    var reader = new FileReader();

		    reader.onload = function (e) 
		    {
		    	var image = document.createElement('img');
					image.src = e.target.result;

					image.onload = function()
					{
						var canvas = document.createElement('canvas');
							canvas.width = image.width;
							canvas.height = image.height;

							var newHeight = 728;
							var newWidth = 728;
							var changeSize = false;

							if (this.height > newHeight) 
							{
								changeSize = true;
							}
							else if (this.width > newWidth) 
							{
								changeSize = true;
							}

							if (changeSize) 
							{
								if (this.height > this.width) 
								{
									var x = ((this.height - newHeight) / this.height) * this.width;
									newWidth = this.width - x;
								}
								else
								{
									var x = ((this.width - newWidth) / this.width) * this.height;
									newHeight = this.height - x;
								}
							}
							else
							{
								newHeight = this.height;
								newWidth = this.width;
							}

							canvas.width = newWidth;
							canvas.height = newHeight;

							var ctx = canvas.getContext("2d");
							ctx.drawImage(image, 0, 0, newWidth, newHeight);

							var dataurlTemp = canvas.toDataURL();

							setTimeout(function(){
								loader(input, 'hide');
								$(input).siblings('div').find('img').attr('src', dataurlTemp);
							},500);
							
					}
		    }
		    reader.readAsDataURL(input.files[0]);
		}
	}

	$('#picture').change(function(){
		loader(this, 'show');
		readURL(this);
	});

	function loader(elmt, opt)
	{
		var htmlLoad =  '<div class="open-loader">' +
							'<img src="{{asset('assets/images/loader.gif')}}" style="width: 50px">' +
				   		'</div>';
		if (opt == 'show') 
		{
			$(elmt).siblings('div').append(htmlLoad);
		}
		else
		{
			try{
				$(elmt).siblings('div').children('.open-loader').remove();
			}catch(err){}
		}
	}

	function saveMed(elmt)
	{
		var name = $('#name');
		var brandName = $('#brandName');
		var type = $('#type');
		var minAge = $('#minAge');
		var maxAge = $('#maxAge');
		var untakers = $('#untakers');
		var directionOfUse = $('#directionOfUse');
		var picture = $('#picture').siblings('div').find('img').attr('src');
		var desc = $('#desc');
		var purpose = $('#purpose');
		var takers = $('#takers');

		var valid = validateMedData();

		var handler = function(){
			var tempFunc = validateMedData();
		}

		$('#addMedicineModal input, textarea').bind('change', handler);

		if (valid) 
		{
			$('#addMedicineModal input, textarea').unbind('change');
			$('#addMedicineModal input, textarea')
			$('#addMedicineModal input, textarea').val('');
			$('#addMedicineModal').modal('hide');
		}

	}


</script>