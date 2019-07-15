function setBranding() {
	$('#branding').css({
		'position': 'absolute',
		'top': ($(document).height() - 30) + 'px'
	});
}

$(window).resize(setBranding);

$(document).ready(function() {
	setBranding();
});