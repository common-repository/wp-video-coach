// <![CDATA[
jQuery(document).ready(function($) {
	$('#logo-slider').before('<div class="slider-controls"><a href="#" id="prev">&lt;</a> <a href="#" id="next">&gt;</a></div>').cycle({ 
    timeout: 7 * 1000,
	fx:      'scrollHorz',
	next:   '#prev',
	prev:   '#next',
});
});
// ]]>