@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			<div class="man-title-header">About 10 health tips</div>

			<a href="watch/12" class="health-tips-card">
				<div class="video-container">
					<iframe id="player" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/L1qDCZsqxxc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="video-cup"></div>
				</div>
				<div class="details-container">
					<b class="title-tips">10 dangerous foods you should avoid!</b>
					<p class="health-tips-description">Think Twice Before Eating These Foods. At Diabetic Living, we believe that eating with diabetes doesn't have to mean deprivation, starvation, or bland and boring foods. ...</p>
				</div>
			</a>
			<a href="watch/12" class="health-tips-card">
				<div class="video-container">
					<iframe id="player" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/gNHKRocTVcg?list=PLqxfhR260JI5yutZsXAVCtK9dpFZYcy7f" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="video-cup"></div>
				</div>
				<div class="details-container">
					<b class="title-tips">Drink Water The Correct Way -- Dr. Willie Ong Health Blog #1</b>
					<p class="health-tips-description">The Correct Way To Drink Water Video By Dr. Willie Ong (Internist-Cardiologist)</p>
				</div>
			</a>
			<a href="watch/12" class="health-tips-card">
				<div class="video-container">
					<iframe id="player" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/J5JjSYi9inc?list=PLqxfhR260JI5yutZsXAVCtK9dpFZYcy7f" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="video-cup"></div>
				</div>
				<div class="details-container">
					<b class="title-tips">High Blood Pressure: Doctor's Remedies -- Dr. Willie Ong Video 3(a)</b>
					<p class="health-tips-description">High Blood Pressure Treatment Video By Dr. Willie T. Ong</p>
				</div>
			</a>
		</div>
	</div>
</div>

@endsection