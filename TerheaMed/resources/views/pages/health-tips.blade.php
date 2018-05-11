@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			@if(isset($healthTipsHomeRemedySearched))

				<div id="searchedHealthTipsData" data-searhedData="{{ json_encode($healthTipsHomeRemedySearched )}}"></div>
				<div data-healthHomeData="{{ json_encode($healthTipsHomeRemedy) }}" id="healthHomeData"></div>
				<div class="man-title-header">About <span id="searchedQuantity"></span>
					{{ (Request::is('homeremedy'))? ' home remedies' : ' health tips' }} found
				</div>
				<br>
				<div id="healthTipsAndHomeRemedyPanelForSeached"></div>

				<br><br>
				<div class="man-title-header">Other <span id="otherQuantity"></span> {{ (Request::is('homeremedy'))? ' home remedies' : ' health tips' }}</div>
				<br>
				<div id="remaininghealthTipsAndHomeRemedyPanel"></div>

			@else
			
				<div class="man-title-header">About 
					{{ count($healthTipsHomeRemedy) }} 
					{{ (Request::is('homeremedy'))? ' home remedies' : ' health tips' }}
				</div>

				@for ($i = 0; $i < count($healthTipsHomeRemedy); $i++)
					<a href="view/{{ $healthTipsHomeRemedy[$i]->id }}" class="health-tips-card">
						<div class="video-container">
							<iframe id="player" style="width: 100%; height: 100%;" src="{{ $healthTipsHomeRemedy[$i]->video_embed_code }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<div class="video-cup"></div>
						</div>
						<div class="details-container">
							<b class="title-tips">{{ $healthTipsHomeRemedy[$i]->name }}</b>
							<p class="health-tips-description">{{ $healthTipsHomeRemedy[$i]->description }}</p>
						</div>
					</a>
				@endfor

			@endif
		</div>
	</div>
</div>

@include('scripts_for_health_tips.script-for-retrieving-data')

@endsection