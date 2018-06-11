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


	$('#submit_date_reservation').click(function() {

		var jourD = $('#jourD').val();
		var moisD = $('#moisD').val();
		var anneeD = $('#anneeD').val();
		var jourA = $('#jourA').val();
		var moisA = $('#moisA').val();
		var anneeA = $('#anneeA').val();

		if (jourA!=""&&moisA!=""&&anneeA!=""&&anneeD!=""&&moisD!=""&&jourD!="") {
			$.post('ajax/reservation.php', {jourD:jourD,moisD:moisD,anneeD:anneeD,jourA:jourA,moisA:moisA,anneeA:anneeA}, function(data) {
				$('.principalBanner').html("<br /><br /><br /><center><img src='images/ajax-loader (3).gif' /></center><br /><br />");
				$('.principalBanner').html(data);	
			});
		} else {
			alert('Remplir tous les champs !');
		}

	});


	
});