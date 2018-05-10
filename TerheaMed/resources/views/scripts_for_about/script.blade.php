<script type="text/javascript">

	function isNullOrWhitespace( input ) 
	{

	    if (typeof input === 'undefined' || input == null) return true;

	    return input.replace(/\s/g, '').length < 1;
	}

	function searchBtn()
	{
		var searchName = $('#searchBox').val();
    	if (isNullOrWhitespace(searchName)) return false;
    	location.href = 'search=' + searchName;
	}

	$(function(){
		$('#searchBox').keypress(function(e){
	    	if (e.which == 13) searchBtn();
	    });
	});

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'https://terheamed.com#!ReviewsCommentOfAboutPage';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'terheamedReviewsComments'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://terheamed.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();

</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>