@extends('admin.main')

@section('content')

<div class="content">
	<div class="form-group">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMedicineModal">Add Medicine</button>
	</div>
	<table class="table">
	  	<thead class="thead-dark">
	    	<tr>
	      	<th scope="col">#</th>
	      	<th scope="col">First</th>
	      	<th scope="col">Last</th>
	      	<th scope="col">Handle</th>
	    	</tr>
	  	</thead>
	  	<tbody>
		    <tr>
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
		    </tr>
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

	  	<div class="row">
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
				      	<option>Non - herbal</option>
				      	<option>Herbal</option>
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
			    	<label for="takers">Who should take it?</label>
			    	<textarea class="form-control" id="takers" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  	</div>

		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="minAge">Age</label>
			    	<div class="row" style="align-items: center;">
			    		<select class="form-control col-md-5" id="minAge">
			    			@for($i = 1; $i < 99; $i++)
					      		<option>{{$i}}</option>
					      	@endfor
				    	</select> to
				    	<select class="form-control col-md-5" id="maxAge">
					      	@for($i = 1; $i < 199; $i++)
					      		<option>{{$i}}</option>
					      	@endfor
				    	</select>
			    	</div>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="untakers">Who should not take it?</label>
			    	<textarea class="form-control" id="untakers" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
			  	<div class="form-group">
			    	<label for="directionOfUse">Direction of use</label>
			    	<textarea class="form-control" id="directionOfUse" rows="3"></textarea>
			    	<i class="err-msg"></i>
			  	</div>
		  		<div class="form-group">
			    	<label for="picture">Picture</label>
			    	<input type="file" class="form-control" id="picture">
			    	<div class="man-img-center">
			  			<img style="height: 100%;">
			  		</div>
			  	</div>
		  	</div>
	  	</div>

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" onclick="saveMed(this)">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection