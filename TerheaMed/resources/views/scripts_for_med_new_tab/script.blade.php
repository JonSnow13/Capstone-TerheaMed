<script type="text/javascript">
	
	$(function(){
		var countSameMed = [];
		var similarmed = $('#similarMedFromDiv').data('similarmed');
		$(similarmed).each(function(index){
			
			var tempId = this.id;
			var checker = false;

			if (!countSameMed.length <= 0) 
			{

				$(countSameMed).each(function(index2){

					if (tempId == this.id) 
					{
						countSameMed[index2].quantity = this.quantity + 1;
						checker = false;
						return false;
					}
					else
					{
						checker = true;
					}

				});

			}
			else
			{
				countSameMed.push({
					id: this.id,
					quantity: 1
				});
			}

			if (checker) 
			{
				countSameMed.push({
					id: this.id,
					quantity: 1
				});
			}

			if (index >= (similarmed.length - 1)) 
			{
				console.log(countSameMed);
				appendSimilarMed(countSameMed);
			}

		});

		function appendSimilarMed(countSameMed)
		{
			countSameMed.sort(function(a, b){
				return parseFloat(b.quantity) - parseFloat(a.quantity)
			});
			$(countSameMed).each(function(){

				var tempId = this.id;

				$(similarmed).each(function(){
					
					if (tempId == this.id) 
					{
						var html = '<a href="{{ url('viewmed') }}/'+ this.id +'" class="similarCard man-card-with-box-shadow col-md-4"' +
									'style="text-decoration: none; color: #000">' + 
								  	'<div class="man-img-center-without-border">' +
								  		'<img src="{{ asset('') }}'+ this.picture +'" alt="Card image cap">' +
								  	'</div>' +
								  	'<div class="card-body">' +
								  		'<h5 class="man-card-title">'+ this.name +'</h5>' +
								  	'</div>' +
									'</a>';
						$('#similarMedPanel').append(html);
						return false;
					}

				});

			});
		}
		// console.log(countSameMed);

	});

</script>