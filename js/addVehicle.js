$(document).ready(function() {

	$('#addVehicle').click(function() {
		
		var marque = $('#marque').val();
		var modele = $('#modele').val();
		var serie = $('#serie').val();
		var fabricant = $('#fabricant').val();
		var couleur = $('#couleur').val();
		var contenance = $('#contenance').val();
		var chaises = $('#chaises').val();
		var matricule = $('#matricule').val();
		var Vmax = $('#Vmax').val();
		var transmission = $('#transmission').val();
		var acceleration = $('#acceleration').val();
		var Pmoteur = $('#Pmoteur').val();

		if (marque!=''&&modele!=''&&serie!=''&&fabricant!=''&&couleur!=''&&contenance!=''&&chaises!=''&&matricule!=''&&Vmax!=''&&acceleration!=''&&Pmoteur!='') {
			
			$.post('../administration/controleur/controleur.php', {marque:marque,modele:modele,serie:serie,fabricant:fabricant,couleur:couleur,contenance:contenance,chaises:chaises,matricule:matricule,Vmax:Vmax,transmission:transmission,acceleration:acceleration,Pmoteur:Pmoteur}, function() {
				$('#marque').val('');
				$('#modele').val('');
				$('#serie').val('');
				$('#fabricant').val('');
				$('#couleur').val('');
				$('#contenance').val('');
				$('#chaises').val('');
				$('#matricule').val('');
				$('#Vmax').val('');
				$('#transmission').val('');
				$('#acceleration').val('');
				$('#Pmoteur').val('');
			});

			$('.successAddMessage').fadeIn();

			$('.successAddMessage').fadeOut(10000);

			$('.tableAjoutVehicule').hide();
			$('.coverTableAjoutVehicule').html("<br /><br /><form enctype='multipart/form-data' method='post' action='./'><center><input style='border: 1px solid #aaa; border-radius: 4px;' name='file' type='file' id='file' /></center><br /><center><button type='submit' class='btn btn-primary'><i class='fa fa-check'> </i> Terminer l'enregistrement</button></center></form>");

		} else {
			$('.failAddMessage').fadeIn();

			$('.failAddMessage').fadeOut(10000);
		}
	});

});