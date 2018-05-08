@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-2">
			<div class="profile-form">
				<div class="profile-card">
					<div class="img-profle-card">
						<img src="{{asset('assets/images/angelica.jpg')}}" style="width: 100%">
					</div>
					<p class="profile-name">Ma. Angelica Pacaro</p>
					<b class="position-title">Head Doctor</b>
				</div>
			</div>
			<div class="profile-form">
				<div class="profile-card">
					<div class="img-profle-card">
						<img src="{{asset('assets/images/manuel.jpg')}}" style="width: 100%">
					</div>
					<p class="profile-name">Manuel Ortega Jr.</p>
					<b class="position-title">Doctor</b>
				</div>
			</div>
			<div class="profile-form">
				<div class="profile-card">
					<div class="img-profle-card">
						<img src="{{asset('assets/images/alliza.jpg')}}" style="width: 100%">
					</div>
					<p class="profile-name">Alliza Alam</p>
					<b class="position-title">Pharmacist</b>
				</div>
			</div>
		</div>
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			<div class="man-title-header">About Us</div>
			<p>
				The study and development of the Terhea Med is to help find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient to our surroundings and is developeThe study and development of the Terhea Med is to help find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient to our surroundings and is developed for the sake of our health, to provide safe and high quality patient care. The system provides the non-herbal medicines and herbal medicines. Non-herbal medicines provides the branded and generics medicine with a various information as well as the herbal medicines. The system will be able to suggest drug with ease.d for the sake of our health, to provide safe and high quality patient care. The system provides the non-herbal medicines and herbal medicines. Non-herbal medicines provides the branded and generics medicine with a various information as well as the herbal medicines. The system will be able to suggest drug with ease.
			</p>
			<div class="man-title-header">Contact Details</div>
			<label>Email us: terheamed@gmail.com</label>
			<div id="disqus_thread"></div>
		</div>
	</div>
</div>

@include('scripts_for_about.script')

@endsection