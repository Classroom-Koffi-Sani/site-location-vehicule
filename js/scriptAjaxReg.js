$(document).ready(function() {
	$('#ajouter_vehicule').click(function() {
		$.post('../ajax/ajouter_vehicule.php', function(data) {
			$('#bodyAdminArea').html("<br /><br /><br /><center><img src='../images/ajax-loader (3).gif' /></center>");
			$('#bodyAdminArea').html(data);
		});
	});

	$('#modifier_vehicule').click(function() {
		$.post('../ajax/modifier_vehicule.php', function(data) {
			$('#bodyAdminArea').html("<br /><br /><br /><center><img src='../images/ajax-loader (3).gif' /></center>");
			$('#bodyAdminArea').html(data);
		});
	});

	$('#afficher_vehicule').click(function() {
		$.post('../ajax/afficher_vehicule.php', function(data) {
			$('#bodyAdminArea').html("<br /><br /><br /><center><img src='../images/ajax-loader (3).gif' /></center>");
			$('#bodyAdminArea').html(data);
		});
	});

	$('#supprimer_vehicule').click(function() {
		$.post('../ajax/supprimer_vehicule.php', function(data) {
			$('#bodyAdminArea').html("<br /><br /><br /><center><img src='../images/ajax-loader (3).gif' /></center>");
			$('#bodyAdminArea').html(data);
		});
	});

	$('#administrateurs').click(function() {
		$.post('../ajax/administrateurs.php', function(data) {
			$('#bodyAdminArea').html("<br /><br /><br /><center><img src='../images/ajax-loader (3).gif' /></center>");
			$('#bodyAdminArea').html(data);
		});
	});


	$('#submit_date_reservation2').click(function() {

		var id = $('#id').val();
		var jourD = $('#jourD').val();
		var moisD = $('#moisD').val();
		var anneeD = $('#anneeD').val();
		var jourA = $('#jourA').val();
		var moisA = $('#moisA').val();
		var anneeA = $('#anneeA').val();

		if (jourA!=""&&moisA!=""&&anneeA!=""&&anneeD!=""&&moisD!=""&&jourD!="") {
			$.post('../ajax/reservation2.php', {jourD:jourD,moisD:moisD,anneeD:anneeD,jourA:jourA,moisA:moisA,anneeA:anneeA,id:id}, function(data) {
				$('.reservation_date_request').html("<br /><br /><br /><center><img src='images/ajax-loader (3).gif' /></center><br /><br />");
				$('.reservation_date_request').html(data);	
			});
		} else {
			alert('Remplir tous les champs !');
		}

	});


});