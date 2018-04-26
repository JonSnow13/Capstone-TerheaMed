<!-- Modal for adding elements -->
<div class="modal fade" id="elementsModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 70%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="loader" style="width: 100%"></div>
        <table class="table">
		  	<thead>
		    	<tr>
		    		<th scope="col"></th>
		      		<th scope="col">Name</th>
		      		<th scope="col">Density</th>
		    	</tr>
		  	</thead>
		  	<tbody id="elementTableBody">
		    	<tr>
		    		<td>
		    			<div class="minus-circle-btn minus-element">
		    				<i class="material-icons">remove_circle_outline</i>
		    			</div>
		    		</td>
			      	<td>
			      		<input type="text" class="man-form-control nameVal" placeholder="Name">
			      	</td>
			      	<td>
			      		<input type="text" class="man-form-control denVal" placeholder="Density (e.g. 10 mg)">
			      	</td>
			    </tr>
		  	</tbody>
		</table>
		<div class="add-circle-btn add-element" data-toggle="tooltip" data-placement="top" title="Add row for content">
	    	<i class="material-icons">add_circle</i>
	   	</div>
	   	<div class="alert alert-secondary" id="countRow" role="alert">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="saveElementsBtn" class="btn btn-primary" onclick="saveMedElements(this)">Save</button>
        <button type="button" id="updateElementsBtn" class="btn btn-primary" onclick="updateMedElements(this)">Update</button>
      </div>
    </div>
  </div>
</div>

<!--Modal for creating medicine-->
<div id="addMedicineModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width: 70%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Fill up data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div id="editLoader" style="height: 100%;"></div>
	  	<div class="row">
	  		<input type="hidden" id="medEditId">
	  		<div class="col-md-6">
		  		<div class="form-group">
			    	<label for="name">Name</label>
			    	<input type="text" class="form-control" id="name" placeholder="Name">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="brandName">Brand Name</label>
			    	<input type="text" class="form-control" id="brandName" placeholder="Brand Name">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="genericName">Generic Name</label>
			    	<input type="text" class="form-control" id="genericName" placeholder="Generic Name">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
				    <label for="type">Type</label>
			    	<select class="form-control" id="type">
				      	<option value="1">Non - herbal</option>
				      	<option value="2">Herbal</option>
			    	</select>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="desc">Description</label>
			    	<textarea class="form-control" id="desc" rows="3" placeholder="Description"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="purpose">Purpose</label>
			    	<textarea class="form-control" id="purpose" rows="3" placeholder="Purpose"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="sideEffect">Side effects</label>
			    	<textarea class="form-control" id="sideEffect" rows="3" placeholder="Side effects"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  	</div>

		  	<div class="col-md-6">
		  		{{-- <div class="form-group">
				    <label for="minAge">Age</label>
			    	<div class="row" style="align-items: center;">
			    		<select class="form-control col-md-5" id="minAge">
			    			@for($i = 1; $i < 99; $i++)
					      		<option value="{{$i}}">{{$i}}</option>
					      	@endfor
				    	</select> to
				    	<select class="form-control col-md-5" id="maxAge">
					      	@for($i = 1; $i < 199; $i++)
					      		<option value="{{$i}}">{{$i}}</option>
					      	@endfor
				    	</select>
			    	</div>
			    	<i class="err-msg"></i>
			  	</div> --}}
			  	<div class="form-group">
			    	<label for="warning">Warning</label>
			    	<textarea class="form-control" id="warning" rows="3" placeholder="Warning"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="directionOfUse">Direction of use</label>
			    	<textarea class="form-control" id="directionOfUse" rows="3" placeholder="Direction of use"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="format" style="display: flex;">Format &nbsp
			    		<span<i class="material-icons" data-toggle="tooltip" data-placement="right" title="E.g. Caplet | Syrup | Tablet | Inhaler | Capsule | Inhaler">help_outline</i></span>
			    	</label>
			    	<input type="text" class="form-control" id="format" placeholder="Format">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="prescription">Require Prescription?</label>
			    	<label>
			    		<input type="radio" name="optionA" id="optionPres1"  checked="checked" value="1"> Yes
			    	</label>
			    	<label>
			    		<input type="radio" name="optionA" id="optionPres2" value="0"> No
			    	</label>
			    	<i class="err-msg"></i>
			  	</div>
		  		<div class="form-group">
			    	<label for="picture">Picture</label>
			    	<input type="file" class="form-control" id="pictureUploadInp" onchange="uploadPicture(this)">
			    	<div class="man-img-center">
			    		<div class="clear-btn" onclick="clearImgBtn(this)">
			    			<i class="material-icons">highlight_off</i>
			    		</div>
			  			<img style="height: 100%;">
			  		</div>
			  	</div>
		  	</div>
	  	</div>

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" onclick="saveMedBtn()" id="saveMedBtn">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>