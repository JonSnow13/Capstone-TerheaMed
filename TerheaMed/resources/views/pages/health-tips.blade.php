@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			<div class="man-title-header">About 
				{{ count($healthTips) }} 
				{{ (Request::is('homeremedy'))? ' home remedies' : ' health tips' }}
			</div>

			@for ($i = 0; $i < count($healthTips); $i++)
				<a href="view/{{ $healthTips[$i]->id }}" class="health-tips-card">
					<div class="video-container">
						<iframe id="player" style="width: 100%; height: 100%;" src="{{ $healthTips[$i]->video_embed_code }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<div class="video-cup"></div>
					</div>
					<div class="details-container">
						<b class="title-tips">{{ $healthTips[$i]->name }}</b>
						<p class="health-tips-description">{{ $healthTips[$i]->description }}</p>
					</div>
				</a>
			@endfor
		</div>
	</div>
</div>

@endsection