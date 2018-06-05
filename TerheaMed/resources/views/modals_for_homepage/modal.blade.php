{{-- Modal for direction map --}}
<div id="mapModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width: 90%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <div class="row" style="margin-bottom: 4px;">
            <div class="col-md-12">
              <button class="btn btn-primary" type="button" id="mapModalStreetviewBtn">Open street view</button>
              <button class="btn btn-primary" type="button" id="mapModalOpenHoursBtn">View open hours</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="streetView" style="position: absolute; z-index: 50;"></div>
              <div class="man-map" id="map"></div>
            </div>
          </div>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEe9Jl9DxQwW2vDMyd0iUW4TSGYDapeIE&callback=initMap" async></script> --}}
          <div class="row moreMapInfo">
            <div class="col-md-6">
              <div id="startingPoint">
              </div>
              <div id="distination">
              </div>
            </div>
            <div class="col-md-6">
              <div id="distance">
              </div>
              <div id="time">
              </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

{{-- MOdal for open hours --}}
<div id="openHoursModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="open-hours-loader">
          <img src="{{asset('assets/images/loader.gif')}}" style="width: 14%">
        </div>
        <p id="establishment"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

{{-- MOdal for streetview --}}
<div id="openStreetview" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width: 90%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div id="man-streeview">
          <div class="open-loader" id="streetViewLoader">
            <img src="{{asset('assets/images/loader.gif')}}" style="width: 50px">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>