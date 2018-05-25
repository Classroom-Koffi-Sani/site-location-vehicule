<?php
	include '../includes/connection.php';
	if (isset($_POST['jourD'])&&isset($_POST['moisD'])&&isset($_POST['anneeD'])&&isset($_POST['jourA'])&&isset($_POST['moisA'])&&isset($_POST['anneeA'])&&isset($_POST['id'])) {
		if (($_POST['jourD']<date('d')&&$_POST['moisD']<=date('m')&&$_POST['anneeD']<=date('Y'))||($_POST['jourD']<=date('d')&&$_POST['moisD']>=date('m')&&$_POST['anneeD']<date('Y'))||($_POST['jourA']<=$_POST['jourD']&&$_POST['moisA']<=$_POST['moisD']&&$_POST['anneeA']<=$_POST['anneeD'])) {
			echo("<div style='margin: 0 20%;'><center><br /><br /><br /><h3 style='color: red; line-height: 30px;'><i class='fa fa-exclamation-circle fa-2x'> </i><br />Aucun véhicule n'est disponible pour la période choisie !</h3></center></div><br /><br /><br />");
		} else {
			$req="SELECT * FROM vehicules WHERE id= ?";
			$req_execute=$bdd->prepare($req);
			$req_execute->execute(array($_POST['id']));
			$check=$req_execute->rowCount($req);

			if ($check==0) {
				echo("<div style='margin: 0 20%;'><center><br /><br /><br /><h3 style='color: red; line-height: 30px;'><i class='fa fa-exclamation-circle fa-2x'> </i><br />Aucun véhicule n'est disponible pour la période choisie !</h3></center></div><br /><br /><br />");
			} else {
				while($data=$req_execute->fetch()) {
					if (($data['jour'] < $_POST['jourD'] && $data['mois'] <= $_POST['moisD'] && $data['annee'] <= $_POST['anneeD']) || ($data['jour'] >=$_POST['jourD'] && $data['mois'] <$_POST['moisD'] && $data['annee'] <=$_POST['anneeD'] )) {
				?>
						<br /><br />
						<div style="border: 1px solid #24d770; border-radius: 5px; margin:  0 15%;">
							<div style="padding: 10px 15px; border-left: 3px solid #24d770;">
								
								Confirmez-vous la réservation ?
									
						<a href="../" class="btn btn-default btn-sm">Annuler</a>
						<a href="../confirm_reservation/traitement.php?id=<?php echo($_POST['id']); ?>&jour=<?php echo $_POST['jourA']; ?>&mois=<?php echo $_POST['moisA']; ?>&annee=<?php echo $_POST['anneeA']; ?>" class="btn btn-success btn-sm"><i class="fa fa-check"> </i> Confirmer</a>
					</div>
				</div>

				<?php
						} else {
							echo("<div style='margin: 0 20%;'><center><br /><br /><br /><h3 style='color: red; line-height: 30px;'><i class='fa fa-exclamation-circle fa-2x'> </i><br />Ce véhicule n'est pas disponible pour la période choisie !</h3></center></div><br /><br /><br />");
						}
							
				}
			}
		}
		
		
	}
?>