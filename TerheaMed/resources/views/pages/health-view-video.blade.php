@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			
			<div class="big-video-container">
				<iframe id="player" style="width: 100%; height: 100%;" src="{{ $healthTip->video_embed_code }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>

			<div class="man-title-header">{{ $healthTip->name }}</div>
			<p class="tips-description">
				{{ $healthTip->description }}
			</p>

			<div class="man-title-header">{{ count($tips) . ' ' . $healthTip->tip_title}}:</div>

			<ol>
				@for ($i = 0; $i < count($tips); $i++)
					<li class="list-tip-item">
						{{ $tips[$i]->description }}
					</li>
				@endfor
			</ol>

		</div>
	</div>
</div>

@endsection