@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			<div class="man-title-header">About 10 health tips</div>

			<div class="health-tips-card">
				<div class="video-container">
					<iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/L1qDCZsqxxc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="video-cup"></div>
				</div>
			</div>
			<div class="health-tips-card">
				<div class="video-container">
					<iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/L1qDCZsqxxc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="video-cup"></div>
				</div>
			</div>
			<div class="health-tips-card"></div>
		</div>
	</div>
</div>

@endsection