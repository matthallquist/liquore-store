$ = jQuery;

$(document).ready(function() {
    $(".hamburger").on('click', function() {
    	$(".hamburger").toggle();
    	$(".times").toggle();
    	$(".mobile-header-wrap").toggle(400);
    });
    $(".times").on('click', function() {
    	$(".times").toggle();
    	$(".hamburger").toggle();
    	$(".mobile-header-wrap").toggle(400);
    });

	function hideIcons(one) {
		if (one.matches) {
    		$(".times").hide();
    		$(".hamburger").hide();
    		$(".mobile-header-wrap").hide();
		} else {
    		$(".hamburger").show();			
		}
	}

	$one = window.matchMedia("(min-width: 951px)");
	hideIcons($one);
	$one.addListener(hideIcons);    
});