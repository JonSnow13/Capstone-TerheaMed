@extends('master_folder.app2')

@section('content')

<div class="man-content" style="background: #e9ebee">
	<div class="row">
		<div class="col-md-10 health-tips-panel" style="background: #fff">
			
			<?php $array = json_decode($specsMedData->format); ?>
			@if($array->prescription_required)
				<div class="prescription" style="margin-top: 15px;">You can't obtain this medicine without a prescription from a doctor.</div>
			@endif

			<div class="big-img-container">
				<img src="{{ asset('') . $specsMedData->picture }}" style="height: 100%; max-width: 100%">
			</div>

			<b class="man-title-header">{{ $specsMedData->name }}</b>

			<div class="man-title-header">{{ ($specsMedData->category_id == 1)? 'Product Details:' : 'Herbal Details:' }}</div>

			@if($specsMedData->category_id == 1)

				<p style="margin-left: 5px;">Brand: {{ $specsMedData->brand_name }}</p>
				<p style="margin-left: 5px;">Generic name: {{ $specsMedData->generic_name }}</p>

			@endif
			
			<p style="margin-left: 5px;">Format: {{ $array->format }}</p>

			<div class="man-title-header">{{ ($specsMedData->category_id == 1)? 'What is this medicine for?' : 'What is this herbal for?' }}</div>

			<div class="tips-description" style="color: #000">
				{{ $specsMedData->desc }}
			</div>

			<div class="man-title-header">How to use this {{ ($specsMedData->category_id == 1)? ' medicine?' : ' herbal?' }}</div>

			<?php $direction_of_use = explode("*", $specsMedData->direction_of_use); ?>
			<ul>
				@foreach($direction_of_use  as $val)
					@if(!empty($val))
						<li class="list-tip-item">{{ $val }}</li>
					@endif
				@endforeach
			</ul>

			<div class="man-title-header">What is in this {{ ($specsMedData->category_id == 1)? ' medicine?' : ' herbal?' }}</div>
			<div class="col-md-12">
				<table class="table">
				  	<tbody>
						@foreach($contentMedHer as $val)
					    	<tr>
					      		<td>{{ $val->name }}</td>
					      		<td>{{ ($val->density == 'null')? '' : $val->density }}</td>
					    	</tr>
					  	@endforeach
				  	</tbody>
				</table>
			</div>

			<div class="man-title-header">Warning</div>
			<div class="tips-description" style="color: #000">{{ $specsMedData->side_effect }}</div>

			<div class="col-md-12 title-header">
  				<div class="man-title-header">Reviews:</div>
  			</div>
			<div class="col-md-12">
				<div id="disqus_thread"></div>
			</div>
			<script type="text/javascript">
				var disqus_config = function () {
				this.page.url = 'https://terheamed.com#!commentPanel' + {{ $specsMedData->id }};  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = 'commentPanel'+ {{ $specsMedData->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};

				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://terheamed.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
			</script>

			<div class="col-md-12 title-header">
  				<div class="man-title-header">{{ ($specsMedData->category_id == 1)? 'Similar to the generic name of this medicine' : 'Other Herbals' }}</div>
  			</div>

  			<div class="row" style="padding-bottom: 20px;">
  				<div data-similarmed="{{json_encode($similarMedHer)}}" id="similarMedFromDiv"></div>
  				<div id="similarMedPanel" class="col-md-12" style="display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;">
  				</div>

  			</div>
			

		</div>
	</div>
</div>

@include('scripts_for_med_new_tab.script')

@endsection