@extends('admin.main')

@section('content')

<div class="man-content">
	<div class="form-group" style="margin-top: 20px;">
		<button type="button" class="btn btn-light" onclick="openMedModal()">Add Medicine</button>
		<button type="button" class="btn btn-light" onclick="openHealthTipModal()">Add Health Tips</button>
	</div>

	<div>

	  	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" id="myTab" role="tablist">
		  	<li class="nav-item">
		    	<a class="nav-link active" id="non-herbal-tab" data-toggle="tab" href="#nonHerbal" role="tab" aria-controls="non-herbal" aria-selected="true">Non - Herbal</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" id="herbal-tab" data-toggle="tab" href="#herbal" role="tab" aria-controls="herbal" aria-selected="false">Herbal
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a class="nav-link" id="health-tips-tab" data-toggle="tab" href="#healthtips" role="tab" aria-controls="healthtips" aria-selected="false">Health Tips
		    	</a>
		    </li>
		</ul>

	  	<!-- Tab panes -->
	  	<div class="tab-content" id="myTabContent">
	    	<div role="tabpanel" class="tab-pane fade show active" id="nonHerbal" aria-labelledby="non-herbal-tab">
	    		<table class="table responsive table-hover" id="medicineDataTableNonHerbal">
				  	<thead class="thead-dark">
				    	<tr>
					      	{{-- <th scope="col">#</th> --}}
					      	<th scope="col">Picture</th>
					      	<th scope="col">Name</th>
					      	<th scope="col">Brand Name</th>
					      	<th scope="col">Generic Name</th>
					      	<th scope="col">Format</th>
					      	<th scope="col">Type</th>
					      	<th scope="col">Description</th>
					      	<th scope="col">Purpose</th>
					      	<th scope="col">Usage</th>
					      	<th scope="col">Warning</th>
					      	<th scope="col">Side Effects</th>
					      	<th scope="col"><i class="material-icons">settings</i></th>
				    	</tr>
				  	</thead>
				  	<tbody>
				 	</tbody>
				</table>
	    	</div>
	    	<div class="tab-pane fade" id="herbal" role="tabpanel" aria-labelledby="herbal-tab">
	    		<table class="table responsive table-hover" id="medicineDataTableHerbal">
				  	<thead class="thead-dark">
				    	<tr>
					      	{{-- <th scope="col">#</th> --}}
					      	<th scope="col">Picture</th>
					      	<th scope="col">Name</th>
					      	<th scope="col">Brand Name</th>
					      	<th scope="col">Generic Name</th>
					      	<th scope="col">Format</th>
					      	<th scope="col">Type</th>
					      	<th scope="col">Description</th>
					      	<th scope="col">Purpose</th>
					      	<th scope="col">Usage</th>
					      	<th scope="col">Warning</th>
					      	<th scope="col">Side Effects</th>
					      	<th scope="col"><i class="material-icons">settings</i></th>
				    	</tr>
				  	</thead>
				  	<tbody>
				 	</tbody>
				</table>
	    	</div>
	    	<div class="tab-pane fade" id="healthtips" role="tabpanel" aria-labelledby="health-tips-tab">
	    		<table class="table responsive table-hover" id="healthTipsDataTable">
				  	<thead class="thead-dark">
				    	<tr>
					      	{{-- <th scope="col">#</th> --}}
					      	<th scope="col">Name</th>
					      	<th scope="col">Description</th>
					      	<th scope="col">Tip Title</th>
					      	<th scope="col">Video Source</th>
					      	<th scope="col"><i class="material-icons">settings</i></th>
				    	</tr>
				  	</thead>
				  	<tbody>
				 	</tbody>
				</table>
	    	</div>
	  	</div>

	</div>
	
</div>

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

{{-- <div id="editMedicineModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width: 70%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div id="editLoader" style="height: 100%;"></div>
	  	<div class="row">
	  		<input type="hidden" id="medEditId">
	  		<div class="col-md-6">
		  		<div class="form-group">
			    	<label for="name">Name</label>
			    	<input type="text" class="form-control" id="nameEdit" placeholder="Name">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="brandName">Brand Name</label>
			    	<input type="text" class="form-control" id="brandNameEdit" placeholder="Brand">
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
				    <label for="type">Type</label>
			    	<select class="form-control" id="typeEdit">
				      	<option value="1">Non - herbal</option>
				      	<option value="2">Herbal</option>
			    	</select>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="desc">Description</label>
			    	<textarea class="form-control" id="descEdit" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="purpose">Purpose</label>
			    	<textarea class="form-control" id="purposeEdit" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="takers">Who should take it?</label>
			    	<textarea class="form-control" id="takersEdit" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  	</div>

		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="minAge">Age</label>
			    	<div class="row" style="align-items: center;">
			    		<select class="form-control col-md-5" id="minAgeEdit">
			    			@for($i = 1; $i < 99; $i++)
					      		<option value="{{$i}}">{{$i}}</option>
					      	@endfor
				    	</select> to
				    	<select class="form-control col-md-5" id="maxAgeEdit">
					      	@for($i = 1; $i < 199; $i++)
					      		<option value="{{$i}}">{{$i}}</option>
					      	@endfor
				    	</select>
			    	</div>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="untakers">Who should not take it?</label>
			    	<textarea class="form-control" id="untakersEdit" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="directionOfUse">Direction of use</label>
			    	<textarea class="form-control" id="directionOfUseEdit" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  		<div class="form-group">
			    	<label for="picture">Picture</label>
			    	<input type="file" class="form-control" id="pictureUploadInpEdit" onchange="uploadPicture(this)">
			    	<div class="man-img-center">
			  			<img style="height: 100%;">
			  		</div>
			  	</div>
		  	</div>
	  	</div>

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" onclick="updateMedBtn()" id="saveMedBtn">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> --}}


@endsection
