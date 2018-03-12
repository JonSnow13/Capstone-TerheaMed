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

	var lastFileSelected = '';
	$('#picture').change(function(){

		if ($(this).val() == undefined || $(this).val() == '') 
		{
			return false;
		}

		lastFileSelected = $(this).val();
		console.log(lastFileSelected);
		loader($(this).siblings('div'), 'show');
		readURL(this);
	});

	function loader(elmt, opt)
	{
		var htmlLoad =  '<div class="open-loader">' +
							'<img src="{{asset('assets/images/loader.gif')}}" style="width: 50px">' +
				   		'</div>';
		if (opt == 'show') 
		{
			elmt.append(htmlLoad);
		}
		else
		{
			try{
				$('.open-loader').remove();
			}catch(err){}
		}
	}

	$('#addMedicineModal input, textarea').keypress(function(e){
		if (e.which == 13) 
		{
			saveMed();
		}
	});

	function saveMed()
	{
		var medInfoArray = [];
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
			$('#saveMedBtn').text('Saving...');

			medInfoArray.push({
				name: name.val(),
				brandName: brandName.val(),
				type: type.val(),
				age: minAge.val() + ' - ' + maxAge.val(),
				untakers: untakers.val(),
				directionOfUse: directionOfUse.val(),
				picture: picture,
				desc: desc.val(),
				purpose: purpose.val(),
				takers: takers.val()
			});

			setTimeout(function(){
				$.ajax({
					url: '{{ route("json_add_medicine") }}',
					headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
					type: 'POST',
					data: {medInfoArray: medInfoArray},
					success: function(){

						$('#addMedicineModal input, textarea').unbind('change');
						$('#addMedicineModal input, textarea')
						$('#addMedicineModal input, textarea').val('');
						$('#addMedicineModal').modal('hide');
						$('#saveMedBtn').text('Save');
						$('#picture').siblings('div').find('img').attr('src', '');
						displayMedicineDataTable.ajax.reload();
					}
				});

			},100);
		}

	}

	var displayMedicineDataTable;
	$(function(){
		$.fn.dataTable.ext.errMode = 'none';

		displayMedicineDataTable = $('#medicineDataTable').DataTable({
			destroy: true,
			"pageLength": 10,
			"ajax" : "{{ url('/getAllMedicineData') }}",
			"columns": [
				{
					data: 'picture',
					render: function(data, type, row){
						return '<img src="'+ data +'" style="width:50px;">';
					}
				},
				{
					data: 'name',
					render: function(data, type, row){
						return data;
					}
				},
				{
					data: 'brand_name',
					render: function(data, type, row){
						return data;
					}
				},
				{
					data: 'desc',
					render: function(data, type, row){
						return data;
					}
				},
				{
					render: function(data, type, row){
						var temp = row['takers'];
						temp = temp.replace(/\&quot;/g, '"');
						var obj = jQuery.parseJSON(temp);

						return obj.age + ' yo';
					}
				},
				{
					data: 'untakers',
					render: function(data, type, row){
						return data;
					}
				},
				{
					data: 'how_to_take',
					render: function(data, type, row){
						return data;
					}
				}
			],
			"createdRow": function( nRow, aData, iDataIndex ) {
                            $(nRow).data('medicineData', aData);
                        }
		});

	});


</script>