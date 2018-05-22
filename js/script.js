$(document).ready(function() {
	$('.discoverBtn').click(function() {
		$(this).hide();
		$('.plusOptionVoiture').hide();
		$('.deplierBtn').show();
		//$('html,body').animate({scrollTop:600}, 1200);
		$('#bodyTop').slideUp(1200);
		$('.header').slideUp(1200);
		$('.middleBar').slideUp(1200);
		$('#bodyBottom').show();
	});
	$('.btn.btn-info.btn-lg.deplierBtn').click(function() {
		$(this).hide();
		$('.plusOptionVoiture').show();
		$('#bodyBottom').slideUp(1200);
		$('.discoverBtn').show();
		$('#bodyTop').slideDown(1200);
		$('.header').slideDown(1200);
		$('.middleBar').slideDown(1200);
	});


	$('.menuToggle').on("click", function() {
		$('.menuMinWidth').slideToggle();
	});
});