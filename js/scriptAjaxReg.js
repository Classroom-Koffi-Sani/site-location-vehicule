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
});