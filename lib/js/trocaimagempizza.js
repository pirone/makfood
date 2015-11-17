/*
var images = new Array();
for (var i = 1; i < 8; i++) {
    images.push("lib/img/pizza_banner" + i + ".jpg");
}
var x = 0;

function changeImage() {
    document.getElementById('pizzabanner').src = images[x];
    if (x < 5) {
        x += 1;
    } else {
        x = 0;
    }
}
setInterval(function () {
    changeImage();
}, 1000);*/
$(function() {
	$('#pizzabanner ul').bxSlider({
		mode: 'fade',
		pager: false,
		controls: false,
		auto: true
	});
	$('#pizzabanner img').css('display', 'inline');
});