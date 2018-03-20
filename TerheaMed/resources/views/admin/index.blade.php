@extends('admin.main')

@section('content')

<div class="man-content">
	<div class="form-group" style="margin-top: 20px;">
		<button type="button" class="btn btn-primary" onclick="openMedModal()">Add Medicine</button>
	</div>
	<table class="table responsive table-hover" id="medicineDataTable">
	  	<thead class="thead-dark">
	    	<tr>
		      	{{-- <th scope="col">#</th> --}}
		      	<th scope="col">Picture</th>
		      	<th scope="col">Name</th>
		      	<th scope="col">Brand Name</th>
		      	<th scope="col">Description</th>
		      	<th scope="col">Purpose</th>
		      	<th scope="col">Usage</th>
		      	<th scope="col">Warning</th>
		      	<th scope="col">Side Effects</th>
		      	<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
		    {{-- <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      <td>@twitter</td>
		    </tr> --}}
	 	</tbody>
	</table>
</div>

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
			    	<input type="text" class="form-control" id="brandName" placeholder="Brand">
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
			    	<textarea class="form-control" id="desc" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="purpose">Purpose</label>
			    	<textarea class="form-control" id="purpose" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="sideEffect">Side effects</label>
			    	<textarea class="form-control" id="sideEffect" rows="3"></textarea>
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
			    	<textarea class="form-control" id="warning" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="directionOfUse">Direction of use</label>
			    	<textarea class="form-control" id="directionOfUse" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  		<div class="form-group">
			    	<label for="picture">Picture</label>
			    	<input type="file" class="form-control" id="pictureUploadInp" onchange="uploadPicture(this)">
			    	<div class="man-img-center">
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
