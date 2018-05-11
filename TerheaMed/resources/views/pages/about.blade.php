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
				The study and development of the Terhea Med is to help, find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient for our daily life. It is developed for the sake of our health and to provide safe suggestions of medicines. Non-herbal medicines and herbal medicines are provided.
				<br><br>
				Terheamed is made for the people who are not well familiar with the places they are staying, because the system provides a google map with the nearby pharmacy / drug stores / hospitals. Street views and directions are provided with each specific establishment. Time costs are reduced by the help of showing the estemated time of travel from a starting point to a destination.
			</p>
			<div class="man-title-header">Contact Details</div>
			<label>Email us: terheamed@gmail.com</label>
			<div id="disqus_thread"></div>
		</div>
	</div>
</div>

@include('scripts_for_about.script')

@endsection