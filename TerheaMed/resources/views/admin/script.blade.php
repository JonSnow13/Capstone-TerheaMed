<script type="text/javascript">

	var medIdForElement;
	
	$(function(){
		$('.modal').on('shown.bs.modal', function () {
		  $(this).find("input:enabled:visible:first").focus();
		});
		$('[data-toggle="tooltip"]').tooltip();

		countRowFunc();
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
		$('#addMedicineModal .modal-title').text('Fill up data');
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
		var genName = $('#genericName');

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
			if (isNullOrWhitespace(genName.val())) genName.val('N/A'); 
			
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
				prescription: prescription,
				genericName: genName.val()
			});

			setTimeout(function(){
				
				if ($('#medEditId').val() == '') 
				{
					$.ajax({
						url: '{{ route("json_add_medicine") }}',
						headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
						type: 'POST',
						data: {medInfoArray: medInfoArray},
						success: function(data){
							clearAllModalInputField();
							displayMedicineDataTableNonHerbal.ajax.reload();
							displayMedicineDataTableHerbal.ajax.reload();
							medIdForElement = data.id;

							$('#saveElementsBtn').show();
							$('#updateElementsBtn').hide();
							$('#elementsModal .modal-title').text('Elements - ' + data.name);
							$('#elementsModal').modal('show');
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
							displayMedicineDataTableNonHerbal.ajax.reload();
							displayMedicineDataTableHerbal.ajax.reload();
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

	var displayMedicineDataTableNonHerbal, displayMedicineDataTableHerbal;
	$(function(){
		$.fn.dataTable.ext.errMode = 'none';

		displayMedicineDataTableNonHerbal = $('#medicineDataTableNonHerbal').DataTable({
			destroy: true,
			"pageLength": 10,
			"ajax" : "{{ url('/getAllMedicineDataNonHerbal') }}",
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
					data: 'generic_name',
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

		displayMedicineDataTableHerbal = $('#medicineDataTableHerbal').DataTable({
			destroy: true,
			"pageLength": 10,
			"ajax" : "{{ url('/getAllMedicineDataHerbal') }}",
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
					data: 'generic_name',
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
						popoverHtml.attr({'data-toggle' : 'popover', 'data-placement': 'bottom', 'data-content' : '<div class="man-list-btn" onclick="editMed('+ id +')" ><i class="material-icons">mode_edit</i> Edit Medicine</div>' +
							'<div class="man-list-btn" onclick="editElements('+ id +')"><i class="material-icons">mode_edit</i> Edit Content</div>' +
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
		var tempNonHerbal = $('#medicineDataTableNonHerbal > tbody').get(0).rows;
		$(tempNonHerbal).each(function(index){
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
					$('#genericName').val(data.generic_name);
					loader($('#editLoader'), 'hide');
				},1000);
			}
		});

		var tempHerbal = $('#medicineDataTableHerbal > tbody').get(0).rows;
		$(tempHerbal).each(function(index){
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

	function getContentData(id)
	{
		$('#elementTableBody > tr').remove();
		$('.delete-element').unbind('click');
		$.ajax({
			url: '{{ route("json_get_content_of_medicine") }}',
			type: 'GET',
			data: {medicine_id: id},
			success: function(data){

				for (var i = 0; i < data.length; i++) 
				{
					var html = '<tr>' +
		    			'<td>' +
		    				'<div class="minus-circle-btn delete-element" data-id="'+ data[i].id +'" title="Delete row">' +
		    					'<i class="material-icons">remove_circle_outline</i>' +
		    				'</div>' +
		    			'</td>' +
			      		'<td>' +
			      			'<input type="text" class="man-form-control nameVal" placeholder="Name" value="'+ data[i].name +'">' +
			      		'</td>' +
			      		'<td>' +
			      			'<input type="text" class="man-form-control denVal" placeholder="Density (e.g. 10 milligrams)" value="'+ data[i].density +'">' +
			      		'</td>' +
			    	'</tr>';
					$('#elementTableBody').append(html);

					$('.delete-element').click(function(){
						var contentID = $(this).attr('data-id');
						deleteContentOfMed(contentID);
					});

				}

				if (data.length == 0) 
				{
					generateRowForContentOfMedicine();
				}
				var temp = (data.length < 1)? '1 row(s)' : data.length + ' row(s)';
				$('#countRow').text(temp);
				loader($('#elementsModal .modal-body .loader'), 'hide');
			}
		});
	}

	function editElements(id)
	{
		medIdForElement = id;
		$('#saveElementsBtn').hide();
		$('#updateElementsBtn').show();
		$('#elementsModal').modal('show');
		loader($('#elementsModal .modal-body .loader'), 'show');
		$('#elementsModal .modal-title').text('Elements');
		setTimeout(function(){
			getContentData(id);
		}, 500);
	}

	function deleteContentOfMed(id)
	{
		swal({
		  title: "Are you sure?",
		  text: "This will be deleted permanently!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: true,
		  showLoaderOnConfirm: true
		},function(){
			$.ajax({
				url: '{{ route("delete_content_of_med") }}',
				type: 'GET',
				data: { content_id: id },
				success: function(){
					loader($('#elementsModal .modal-body .loader'), 'show');
					setTimeout(function(){
						getContentData(medIdForElement);
					},500);
				},
				error: function(){
					swal("Whoops!", "There's an error. Please try again", "error");
				} 
			});
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
				data: { medicine_id: id },
				success: function(){
					swal("Deleted!", "", "success");
					displayMedicineDataTableNonHerbal.ajax.reload();
					displayMedicineDataTableHerbal.ajax.reload();
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

	$('.minus-element').click(function(){
		$(this).parent().parent().remove();
		countRowFunc();
	});

	$('.add-element').click(function(){

		generateRowForContentOfMedicine();

		$('.minus-element').click(function(){
			$(this).parent().parent().remove();
			countRowFunc();
		});
	});

	function countRowFunc()
	{
		var countRow = $('#elementTableBody tr').length;
		$('#countRow').text(countRow + ' row(s)');
	}

	function saveMedElements(elmt)
	{
		$(elmt).text('Saving');
		var contentArray = [];
		var countRow = $('#elementTableBody tr').length;
		for (var i = 0; i < countRow; i++) 
		{
			var name = $('#elementTableBody tr').eq(i).find('td').eq(1);
		 		name = name.find('.nameVal').val();
		 	var density = $('#elementTableBody tr').eq(i).find('td').eq(2);
		 		density = density.find('.denVal').val();
		 		density = (isNullOrWhitespace(density))? ' ' : density;
			
			contentArray.push({
				name: name,
				density: density
			});
		}
		console.log(contentArray);
		saveMedElemToDb(contentArray, elmt);
	}

	function saveMedElemToDb(contentArray, elmt)
	{
		$.ajax({
			url: '{{ route("json_add_content_to_medicine") }}',
			headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
			type: 'POST',
			data: {contentArray: contentArray, medicine_id: medIdForElement},
			success: function(){
				$('#elementsModal').modal('hide');
				$(elmt).text('Save');
				resetElementsModal();
			}
		});
	}

	function resetElementsModal()
	{
		$('#elementTableBody > tr').remove();
		setTimeout(function(){
			generateRowForContentOfMedicine();
		},100);
	}

	function generateRowForContentOfMedicine()
	{
		var html = '<tr>' +
		    			'<td>' +
		    				'<div class="minus-circle-btn minus-element" title="Delete row">' +
		    					'<i class="material-icons">remove_circle_outline</i>' +
		    				'</div>' +
		    			'</td>' +
			      		'<td>' +
			      			'<input type="text" class="man-form-control nameVal" placeholder="Name">' +
			      		'</td>' +
			      		'<td>' +
			      			'<input type="text" class="man-form-control denVal" placeholder="Density (e.g. 10 mg)">' +
			      		'</td>' +
			    	'</tr>';
		$('#elementTableBody').append(html);
		countRowFunc();
	}

	function updateMedElements(elmt)
	{
		$(elmt).text('Updating...');
		var newContentArray = [];
		var oldContentArray = [];
		var countRow = $('#elementTableBody tr').length;
		for (var i = 0; i < countRow; i++) 
		{

			var dataID = $('#elementTableBody tr').eq(i).find('td').eq(0);
		 		dataID = dataID.find('div').attr('data-id');

		 		console.log(dataID);
		
			if (dataID == undefined || dataID == null) 
			{
				var name = $('#elementTableBody tr').eq(i).find('td').eq(1);
		 			name = name.find('.nameVal').val();
			 	var density = $('#elementTableBody tr').eq(i).find('td').eq(2);
			 		density = density.find('.denVal').val();
			 		density = (isNullOrWhitespace(density))? ' ' : density;

				newContentArray.push({
					name: name,
					density: density
				});
			}
			else
			{
				var name = $('#elementTableBody tr').eq(i).find('td').eq(1);
		 			name = name.find('.nameVal').val();
			 	var density = $('#elementTableBody tr').eq(i).find('td').eq(2);
			 		density = density.find('.denVal').val();
			 		density = (isNullOrWhitespace(density))? ' ' : density;

				oldContentArray.push({
					id: dataID,
					name: name,
					density: density
				});
			}

			if (i >= (countRow-1)) 
			{
				updateMedElemToDb(newContentArray, oldContentArray, elmt);	
			}

		}
	}

	function updateMedElemToDb(newContentArray, oldContentArray, elmt)
	{
		console.log(newContentArray);
		console.log(oldContentArray);
		$.ajax({
			url: '{{ route("json_add_update_content_to_medicine") }}',
			headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
			type: 'POST',
			data: {newContentArray: newContentArray, oldContentArray: oldContentArray, medicine_id: medIdForElement},
			success: function(){
				$('#elementsModal').modal('hide');
				$(elmt).text('Update');
				resetElementsModal();
			}
		});
	}

</script>