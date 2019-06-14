(function($) {
$(document).ready(function() {

// Start Main menu navigation
function openOverlay() {
	$('#burger_nav').css("width", "100%");
};

function closeOverlay() {
	$('#burger_nav').css("width", "0%");
};

$('#burger_open').click(function(){
	openOverlay();
});

$('#burger_close').click(function(){
	closeOverlay();
});
// End Main menu navigation

// Start hidden external links for SEO
$ ('.hidden-link').click(function(){window.open($(this).data('link')); return false;});
// End hidden external links for SEO

}); //document.ready

})( jQuery );