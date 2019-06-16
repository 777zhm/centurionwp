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

var cnt1 = document.getElementById("count1");
var cnt2 = document.getElementById("count2");
var cnt3 = document.getElementById("count3");
var water1 = document.getElementById("water1");
var water2 = document.getElementById("water2");
var water3 = document.getElementById("water3");
var percent1 = cnt1.innerText;
var percent2 = cnt2.innerText;
var percent3 = cnt3.innerText;
var interval1;
var interval2;
var interval3;
interval1 = setInterval(function() {
    percent1++;
    cnt1.innerHTML = percent1 + 6;
    water1.style.transform='translate(0'+','+(100-percent1)+'%)';
    if (percent1 === 74){
        clearInterval(interval1);
    }
}, 60);
interval2 = setInterval(function() {
    percent2++;
    cnt2.innerHTML = percent2 + 6;
    water2.style.transform='translate(0'+','+(100-percent2)+'%)';
    if (percent2 === 56){
        clearInterval(interval2);
    }
}, 60);
interval3 = setInterval(function() {
    percent3++;
    cnt3.innerHTML = percent3 + 6;
    water3.style.transform='translate(0'+','+(100-percent3)+'%)';
    if (percent3 === 50){
        clearInterval(interval3);
    }
}, 60);