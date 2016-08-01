var isSafari = /constructor/i.test(window.HTMLElement);
var verSafari = parseFloat(navigator.userAgent.substr(navigator.userAgent.lastIndexOf('Safari/') + 7, 7));

$(document).ready(function() {

	if (isSafari) {
		if (verSafari < 600) $('#video').addClass('video-safari'); else $('#video').addClass('video-mac-safari');
		console.log(verSafari);
	
	} 
});

$(document).scroll(function() {

	if (window.innerWidth > 931) {
		if (document.getElementById('before-models').getBoundingClientRect().top <= 0) {
			$('#models').addClass('fixed-header');
		} else {
			$('#models').removeClass('fixed-header');
		}
		if (document.getElementById('models').getElementsByTagName('thead')[0].getBoundingClientRect().bottom > (document.getElementById('after-models').getBoundingClientRect().bottom + 20)) {
			$('#models').addClass('remove-header');
		} else {
			$('#models').removeClass('remove-header');
		}
	}

});

$(window).resize(function() {

	if (window.innerWidth < 931) {
		$('#models').removeClass('fixed-header');
		$('#models').removeClass('remove-header');
	}	

});