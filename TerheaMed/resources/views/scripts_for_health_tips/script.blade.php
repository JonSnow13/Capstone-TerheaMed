<script type="text/javascript">
	var bigVideoWidth = $('.big-video-container').width();
	$(function(){
		
		$('[data-toggle="tooltip"]').tooltip();

		$('.big-video-container').css('height', (bigVideoWidth * .5) + 'px');

		var sourceVideo;
		$('.video-cup').hover(function(){

			sourceVideo = $(this).siblings('iframe').attr('src');
			$(this).siblings('iframe').attr('src', sourceVideo + '?autoplay=1;mute=1');
			
		}, function(){

			$(this).siblings('iframe').attr('src', sourceVideo);

		});

	});

	function isNullOrWhitespace( input ) 
	{

	    if (typeof input === 'undefined' || input == null) return true;

	    return input.replace(/\s/g, '').length < 1;
	}

	var countSameMed = [];
	
	$(function(){

			@if (isset($healthTipsHomeRemedySearched))

				populateSearchedHealthTips();
				$('#searchBox').val('{{ $searchName }}');

			@endif

	});

	function searchBtn()
	{
		var searchName = $('#searchBox').val();
    	if (isNullOrWhitespace(searchName)) return false;
    	@if (Request::is('healthtips*') || Request::is('viewhealthtips/*'))
    		location.href = '{{ url("healthtips") }}=' + searchName;
    	@endif
    	@if (Request::is('homeremedy*') || Request::is('viewhomeremedy/*'))
    		location.href = '{{ url("homeremedy") }}=' + searchName;
    	@endif
    	@if (Request::is('about'))
    		location.href = '{{ url("search") }}=' + searchName;
    	@endif 
    	
	}

	$(function(){
		$('#searchBox').keypress(function(e){
	    	if (e.which == 13) searchBtn();
	    });
	});

	function populateSearchedHealthTips()
	{
		var searchedData = JSON.parse($('#searchedHealthTipsData').attr('data-searhedData'));
		$(searchedData).each(function(index){
			
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

			if (index >= (searchedData.length - 1)) 
			{
				console.log(countSameMed);
				preAppendHealthTipsSearched(countSameMed, searchedData);
			}

		});

		if (searchedData.length <= 0) 
		{
			appendRemaininghealthHome();
		}
	}

	function preAppendHealthTipsSearched(countSameMed, searchedData)
	{
		countSameMed.sort(function(a, b){
			return parseFloat(b.quantity) - parseFloat(a.quantity)
		});
		$(countSameMed).each(function(index){

			var tempId = this.id;

			$(searchedData).each(function(){
			
				if (tempId == this.id) 
				{
					appendHtmlHealthTipsHomeRemedy(this, '#healthTipsAndHomeRemedyPanelForSeached');
					return false;
				}

			});

			if (index >= (countSameMed.length - 1)) 
			{
				appendRemaininghealthHome();
			}

		});
	}

	function appendRemaininghealthHome()
	{
		$('#searchedQuantity').text($('.searchedCard').length);

		var remainingHealthHomeRemedy = JSON.parse($('#healthHomeData').attr('data-healthHomeData'));

		$(remainingHealthHomeRemedy).each(function(index){
			appendHtmlHealthTipsHomeRemedy(this, '#remaininghealthTipsAndHomeRemedyPanel');

			if (index >= (remainingHealthHomeRemedy.length - 1)) 
			{
				$('#otherQuantity').text($('.otherCard').length);
			}

		});
	}

	function appendHtmlHealthTipsHomeRemedy(data, whichPanelToAppend)
	{
		var routePath = (data.category_id == 1)? 'viewhealthtips' : 'viewhomeremedy';
		var quantityClassCard = (whichPanelToAppend == '#healthTipsAndHomeRemedyPanelForSeached')? 'searchedCard' : 'otherCard';
		var html = '<a href="'+ routePath +'/'+ data.id +'" data-id="'+ data.id +'" class="health-tips-card healthTipsCard '+ quantityClassCard +'">' +
						'<div class="video-container">' +
							'<iframe id="player" style="width: 100%; height: 100%;" src="'+ data.video_embed_code +'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>' +
							'<div class="video-cup"></div>' +
						'</div>' +
						'<div class="details-container">' +
							'<b class="title-tips">'+ data.name +'</b>' +
							'<p class="health-tips-description">'+ data.description +'</p>' +
						'</div>'
					'</a>';

		var duplicateChecker = true;
		$( ".healthTipsCard" ).each(function( index ) {

			if ($(this).attr('data-id') == data.id) 
			{
				duplicateChecker = false;
			}
			
		});

		if (duplicateChecker) 
		{
			$(whichPanelToAppend).append(html);
		}
	}

var disqus_url = '{{ Request::url() }}';
var disqus_identifier = '{{ Request::path() }}';

var disqus_config = function () {
this.page.url = disqus_url;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = disqus_identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};


(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://terheamed.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();


</script>