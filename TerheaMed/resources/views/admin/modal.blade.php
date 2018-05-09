<!-- Modal for adding elements -->
<div class="modal fade" id="healthModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 70%;">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" >Health Tips</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<input type="hidden" id="category_id">
	      		<div id="editHealthTipLoader" style="height: 100%;"></div>
	      		<div class="row">
	      			<div class="col-md-6">
	      				<div class="form-group">
	      					<label for="heathTipName">Health Tip Name</label>
	      					<input type="text" class="form-control" id="heathTipName">
	      					<i class="err-msg"></i>
	      				</div>
	      				<div class="form-group">
	      					<label for="descriptionHealthTip">Description</label>
	      					<textarea class="form-control" id="descriptionHealthTip" rows="3"></textarea>
	      					<i class="err-msg"></i>
	      				</div>
	      			</div>
	      			<div class="col-md-6">
	      				<div class="form-group">
	      					<label for="embededCode">Youtube Embeded Code</label>
	      					<textarea class="form-control" id="embededCode" rows="2"></textarea>
	      					<i class="err-msg"></i>
	      				</div>
	      				<div class="form-group">
	      					<label for="tipTitle" style="display: flex;">Tip Title
	      						&nbsp 
	      						<span<i class="material-icons" data-toggle="tooltip" data-placement="right" title="E.g. (Tip for preventing diabetes)">help_outline</i></span>
	      					</label>
	      					<input type="text" class="form-control" id="tipTitle">
	      					<i class="err-msg"></i>
	      				</div>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="button" id="saveHealthHomeBtn" class="btn btn-primary" onclick="saveHealthTipsBtn(this)">Save</button>
	        	{{-- <button type="button" id="updateElementsBtn" class="btn btn-primary" onclick="">Update</button> --}}
	      	</div>
	    </div>
	</div>
</div>

<!-- Modal for adding elements -->
<div class="modal fade" id="tipsModal" tabindex="-1" role="dialog" aria-hidden="true" style="overflow: auto;">
  <div class="modal-dialog" role="document" style="max-width: 70%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tips</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="loader" style="width: 100%"></div>
       	<div class="row">
       		<div class="col-md-12">
       			<div class="tips-panel" id="tipsPanel">
		       		{{-- <div class="form-group">
						<label for="description" class="tip-label">Tip 1</label>
						<div class="tip-group">
							<textarea class="form-control tip-field" rows="2">
							</textarea>
							<div class="minus-circle-btn-textarea minus-tip-btn">
			    				<i class="material-icons">remove_circle_outline</i>
			    			</div>
						</div>
						<i class="err-msg"></i>
					</div>
					<div class="form-group">
						<label for="description" class="tip-label">Tip 2</label>
						<div class="tip-group">
							<textarea class="form-control tip-field" rows="2">
							</textarea>
							<div class="minus-circle-btn-textarea minus-tip-btn">
			    				<i class="material-icons">remove_circle_outline</i>
			    			</div>
						</div>
						<i class="err-msg"></i>
					</div> --}}
		       	</div>
       		</div>
       	</div>
       	<div class="add-circle-btn" data-toggle="tooltip" data-placement="top" title="Add tip field" onclick="addTipsBtn()">
	    	<i class="material-icons">add_circle</i>
	   	</div>
	   	<div class="alert alert-secondary" id="countTips" role="alert">4 tips
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="saveTipBtn(this)">Save</button>
        {{-- <button type="button" id="" class="btn btn-primary" onclick="">Update</button> --}}
      </div>
    </div>
  </div>
</div>