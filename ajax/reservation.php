<?php
	include '../includes/connection.php';
	if (isset($_POST['jourD'])&&isset($_POST['moisD'])&&isset($_POST['anneeD'])&&isset($_POST['jourA'])&&isset($_POST['moisA'])&&isset($_POST['anneeA'])) {
		if (($_POST['jourD']<date('d')&&$_POST['moisD']<=date('m')&&$_POST['anneeD']<=date('Y'))||($_POST['jourD']<=date('d')&&$_POST['moisD']>=date('m')&&$_POST['anneeD']<date('Y'))||($_POST['jourA']<=$_POST['jourD']&&$_POST['moisA']<=$_POST['moisD']&&$_POST['anneeA']<=$_POST['anneeD'])) {
			echo("<div style='margin: 0 20%;'><center><br /><br /><br /><h3 style='color: red; line-height: 30px;'><i class='fa fa-exclamation-circle fa-2x'> </i><br />Aucun véhicule n'est disponible pour la période choisie !</h3></center></div><br /><br /><br />");
		} else {
			$req="SELECT * FROM vehicules WHERE (jour < ? AND mois <= ? AND annee <= ?) OR (jour >= ? AND mois < ? AND annee <= ?)";
			$req_execute=$bdd->prepare($req);
			$req_execute->execute(array($_POST['jourD'],$_POST['moisD'],$_POST['anneeD'],$_POST['jourD'],$_POST['moisD'],$_POST['anneeD']));
			$check=$req_execute->rowCount($req);

			if ($check==0) {
				echo("<div style='margin: 0 20%;'><center><br /><br /><br /><h3 style='color: red; line-height: 30px;'><i class='fa fa-exclamation-circle fa-2x'> </i><br />Aucun véhicule n'est disponible pour la période choisie !</h3></center></div><br /><br /><br />");
			} else {
				 while($data=$req_execute->fetch()) { ?>
					<div class="col-xs-12 col-sm-4 col-lg-4">
						<div class="img-V">
							<img class="img-rounded" src="images_voitures/<?php echo($data['image']); ?>" width="100%" />
						</div>
						<br />
						<div class="voitureDesc">
							<center><b><?php echo($data['marque']." ".$data['modele']); ?></b></center>
							Nombre de chaises : 5<?php echo($data['chaises']); ?> chaises<br />
							Source d'énergie : <?php echo($data['couleur']); ?>
							<div style="height: 10px;"></div>
							<center>
								<a href="afficher/?id=<?php echo($data['id']); ?>" class="btn btn-info btn-sm">
									<i class="glyphicon glyphicon-eye-open"> </i>
									<b>Afficher</b>
								</a>
								<a href="confirm_reservation/?id=<?php echo($data['id']); ?>&jour=<?php echo $_POST['jourA']; ?>&mois=<?php echo $_POST['moisA']; ?>&annee=<?php echo $_POST['anneeA']; ?>" class="btn btn-warning btn-sm">
									<i class="fa fa-share"> </i>
									<b>Réserver</b>
								</a>
							</center>
						</div>
					</div>
				<?php }
			}
		}
		
		
	}
?>