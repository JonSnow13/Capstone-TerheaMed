<script type="text/javascript">
	
	$(function(){
		$('.modal').on('shown.bs.modal', function () {
		  $(this).find("input:enabled:visible:first").focus();
		});
		$('[data-toggle="tooltip"]').tooltip();
	});

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
								loader($(input).siblings('div'), 'hide');
								$(input).siblings('div').find('img').attr('src', dataurlTemp);
							},500);
							
					}
		    }
		    reader.readAsDataURL(input.files[0]);
		}
	}

	var lastFileSelected = '';
	function uploadPicture(elmt)
	{
		if ($(elmt).val() == undefined || $(elmt).val() == '') 
		{
			return false;
		}

		lastFileSelected = $(elmt).val();
		loader($(elmt).siblings('div'), 'show');
		readURL(elmt);
	}

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
				$(elmt).find('.open-loader').remove();
			}catch(err){}
		}
	}

	function openMedModal()
	{
		clearAllModalInputField();
		$('#addMedicineModal').modal('show');
	}

	$('#addMedicineModal input').keypress(function(e){
		if (e.which == 13) 
		{
			saveMedBtn();
		}
	});

	function saveMedBtn()
	{
		
		var medInfoArray = [];
		var name = $('#name');
		var prescription = ($('#optionPres1').is(':checked'))? 1 : 0;
		var brandName = $('#brandName');
		var type = $('#type');
		var directionOfUse = $('#directionOfUse');
		var picture = $('#pictureUploadInp').siblings('div').find('img').attr('src');
		var desc = $('#desc');
		var purpose = $('#purpose');
		var sideEffects = $('#sideEffect');
		var warning = $('#warning');
		var format = $('#format');

		var valid = validateMedData();

		var handler = function(){
			var tempFunc = validateMedData();
		}

		$('#addMedicineModal input, textarea').bind('change', handler);
		if (valid) 
		{
			if (isNullOrWhitespace(sideEffects.val())) sideEffects.val('N/A');
			if (isNullOrWhitespace(warning.val())) warning.val('N/A'); 
			if (isNullOrWhitespace(format.val())) format.val('N/A'); 
			
			$('#saveMedBtn').text('Saving...');

			medInfoArray.push({
				name: name.val(),
				brandName: brandName.val(),
				type: type.val(),
				directionOfUse: directionOfUse.val(),
				picture: picture,
				desc: desc.val(),
				purpose: purpose.val(),
				sideEffects: sideEffects.val(),
				warning: warning.val(),
				format: format.val(),
				prescription: prescription
			});

			setTimeout(function(){
				
				if ($('#medEditId').val() == '') 
				{
					$.ajax({
						url: '{{ route("json_add_medicine") }}',
						headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
						type: 'POST',
						data: {medInfoArray: medInfoArray},
						success: function(){
							clearAllModalInputField();
							displayMedicineDataTable.ajax.reload();
						}
					});
				}
				else
				{
					$.ajax({
						url: '{{ route("json_update_medicine") }}',
						headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
						type: 'POST',
						data: {medInfoArray: medInfoArray, medcineId: $('#medEditId').val()},
						success: function(){
							clearAllModalInputField();
							displayMedicineDataTable.ajax.reload();
						}
					});
				}

			},100);
		}

	}

	function clearAllModalInputField()
	{
		$('#addMedicineModal input, textarea').unbind('change');
		$('#addMedicineModal input, textarea')
		$('#addMedicineModal input, textarea').val('');
		$('#addMedicineModal').modal('hide');
		$('#saveMedBtn').text('Save');
		$('#pictureUploadInp').siblings('div').find('img').attr('src', '');
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
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'brand_name',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'format',
					render: function(data, type, row){
						var temp = data;
						temp = temp.replace(/\&quot;/g, '"');
						var obj = jQuery.parseJSON(temp);
						data = obj.format;
						if (data == null) 
						{
							return 'N/A';
						}
						return (data.length > 25)? data.substr(0,24) + "..." : data;;
					}
				},
				{
					data: 'category_id',
					render: function(data, type, row){
						data = (data == 1)? 'Non - Herbal' :  'Herbal';
						return data;
					}
				},
				{
					data: 'desc',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'purpose',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'direction_of_use',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'warningMsg',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'side_effect',
					render: function(data, type, row){
						data = (data.length > 25)? data.substr(0,24) + "..." : data;
						return data;
					}
				},
				{
					data: 'id',
					render: function(data, type, row){
						return '<button class="admin-option btn-light" onmouseover="generatePopoverAdminOption('+ data +')" id="optionAdmin'+ data +'"> <i class="material-icons">more_vert</i> </button>';
					},
					orderable: false
				}
			],
			"createdRow": function( nRow, aData, iDataIndex ) {
                            $(nRow).data('medicineData', aData);
                        }
		});

	});

	function generatePopoverAdminOption(id)
	{
		var popoverHtml = $('#optionAdmin'+id);
						popoverHtml.attr({'data-toggle' : 'popover', 'data-placement': 'bottom', 'data-content' : '<div class="man-list-btn" onclick="editMed('+ id +')" ><i class="material-icons">mode_edit</i> Edit</div>' +
  						'<div class="man-list-btn" onclick="deleteMed('+ id +')"><i class="material-icons">delete</i> Delete</div>'
  						});
  		appendPopoverClick(popoverHtml);
	}

	function appendPopoverClick(elmt)
	{
		elmt.popover({ trigger: "manual" , html: true, animation:false})
	        .on("click", function () {
	            
	            elmt.popover("show");
	            elmt.css('display', 'block');
	            $(".popover").on("mouseleave", function () {
	                elmt.popover('hide');
	                elmt.removeAttr('style');
	            });
	        }).on("mouseleave", function () {
	            
	            setTimeout(function () {
	                if (!$(".popover:hover").length) {
	                    elmt.popover("hide");
	                    elmt.removeAttr('style');
	                }
	            }, 300);
	    	});
	}

	function editMed(id)
	{
		clearAllModalInputField();
		$('#addMedicineModal').modal('show');
		loader($('#editLoader'), 'show');
		$('#addMedicineModal .modal-title').text('Edit data');
		$('#saveMedBtn').text('Update');
		var temp = $('#medicineDataTable > tbody').get(0).rows;
		$(temp).each(function(index){
			var data = $(this).data('medicineData');
			if (data.id == id) 
			{
				setTimeout(function(){
					$('#medEditId').val(data.id)
					$('#name').val(data.name);
					$('#brandName').val(data.brand_name);
					$('#type').val(data.category_id);

					var temp = data.format;
					temp = temp.replace(/\&quot;/g, '"');
					var obj = jQuery.parseJSON(temp);
					$('#format').val(obj.format);

					if (obj.prescription_required == 1) 
					{
						document.getElementById('optionPres1').checked = true;
						document.getElementById('optionPres2').checked = false;
					}
					else
					{
						document.getElementById('optionPres2').checked = true;
						document.getElementById('optionPres1').checked = false;
					}

					$('#directionOfUse').val(data.direction_of_use);
					$('#pictureUploadInp').siblings('div').find('img').attr('src', data.picture);
					$('#desc').val(data.desc);
					$('#purpose').val(data.purpose);
					$('#sideEffect').val(data.side_effect);
					$('#warning').val(data.warningMsg);
					loader($('#editLoader'), 'hide');
				},1000);
			}
		});
	}

	function deleteMed(id)
	{
		swal({
		  title: "Are you sure?",
		  text: "This will be deleted permanently!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false,
		  showLoaderOnConfirm: true
		},function(){
			$.ajax({
				url: '{{ route("deleteMedicine") }}',
				headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
				type: 'POST',
				data: { medcine_id: id },
				success: function(){
					swal("Deleted!", "", "success");
					displayMedicineDataTable.ajax.reload();
				},
				error: function(){
					swal("Whoops!", "There's an error. Please try again", "error");
				} 
			});
		});
		console.log(id);
	}

	function clearImgBtn(elmt)
	{
		$(elmt).siblings('img').attr('src', '');
	}
</script>