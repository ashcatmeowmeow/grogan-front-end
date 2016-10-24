jQuery(document).ready(function ($) {	
	$('h1, h1 a, h2, h2 a, h3, h3 a, h4, h4 a, h5, h5 a, h6, h6 a, .gfield_label, #main-nav .dropdown-menu > li > a').each(function() {
		//$(this).text(toProperCase($(this).text())); 
		if($(this).contents().last()[0].textContent != 'Post-Auction')
			$(this).contents().last()[0].textContent = toProperCase($(this).contents().last()[0].textContent);
	});

	function toProperCase(str)
	{
		var noCaps = ['of','a','the','and','an','am','or','nor','but','is','if','then', 
		'else','when','at','from','by','on','off','for','in','out','to','into','with'];
		return str.replace(/\w\S*/g, function(txt, offset){
			if(offset != 0 && noCaps.indexOf(txt.toLowerCase()) != -1){
				return txt.toLowerCase();    
			}
			return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		});
	}
});