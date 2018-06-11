<?php


	$taille_Max = 2097152;
	$extensions_Valides = array('jpeg', 'jpg', 'png', 'gif');

	if (isset($_FILES['file'])) {

		$req="SELECT MAX(id) id FROM vehicules";
		$req_exe=$bdd->prepare($req);
		$req_exe->execute();
		$check=$req_exe->rowCount($req);

		if ($check==0) {
			$id=1;
		} else {
			if($data=$req_exe->fetch()){
				$id=$data['id'];
			}
			
		}

		if ($_FILES['file']['size'] <= $taille_Max) {
			$extensions_Upload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1));

			if (in_array($extensions_Upload, $extensions_Valides)) {

				$chemin = "../images_voitures/".$id.".".$extensions_Upload;
				$export = move_uploaded_file($_FILES['file']['tmp_name'], $chemin);

				if ($export) {
					$file = $id.".".$extensions_Upload;

					$query=$bdd->prepare('UPDATE vehicules SET image = ? WHERE id = ?');
					$query->execute(array($file,$id));
					$query->closeCursor();

					$successImage=true;

				} 
				else {
					$successImage=false;
					
				}


			} else {
				$successImage=false;
				

			}

		} else {
			
			$successImage=false;
		}

	}

?>
<div class="coverAdminArea">
	<div class="middleBar rmUnderline">
		<table width="100%">
			<tr>
				<td width="300">
					<i class="fa fa-cogs fa-2x"> </i>
					<i class="fa fa-wrench fa-2x"> </i>
					CarsLocation Administration
				</td>
				<td align="right" class="slogan">
					<a href="#" style="color: #fff;">
						<i class="fa fa-user"> </i>
						Lazare
					</a> |
					<a href="../logout.php" style="color: #fff;">
						<i class="glyphicon glyphicon-log-out"> </i>
						Se déconnecter
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="container-slideLeft rmUnderline">
		<div class="row">
			<div class="col-xs-3">
				<div class="slideLeft">
					<div class="dashboard">
						<i class="fa fa-dashboard"> </i>
						<b>Tableau de bord</b>
					</div>
					<div>
						<div class="slideLeftItems" id="ajouter_vehicule">
							<i class="fa fa-plus"> </i>
							Ajouter un véhicule
							<i class="fa fa-chevron-right pull-right" style="line-height: 40px;"> </i>
						</div>
					</div>
					<div>
						<div class="slideLeftItems" id="modifier_vehicule">
							<i class="fa fa-pencil"> </i>
							Modifer un véhicule
							<i class="fa fa-chevron-right pull-right" style="line-height: 40px;"> </i>
						</div>
					</div>
					<div>
						<div class="slideLeftItems" id="afficher_vehicule">
							<i class="fa fa-eye"> </i>
							Afficher les véhicules
							<i class="fa fa-chevron-right pull-right" style="line-height: 40px;"> </i>
						</div>
					</div>
					<div>
						<div class="slideLeftItems" id="supprimer_vehicule">
							<i class="fa fa-trash"> </i>
							Supprimer un véhicule
							<i class="fa fa-chevron-right pull-right" style="line-height: 40px;"> </i>
						</div>
					</div>
					<div>
						<div class="slideLeftItems" id="administrateurs">
							<i class="fa fa-group"> </i>
							Gestions d'administrateurs
							<i class="fa fa-chevron-right pull-right" style="line-height: 40px;"> </i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-9">
				<div class="dashboardBody" id="bodyAdminArea"><br />
					<div class="<?php echo(isset($successImage) ? 'hide' : ''); ?>">
						<br /><br /><br />
						<center>
							<h1 style="color: #aaa;">
								<i class="fa fa-cogs fa-4x"> </i>
								<i class="fa fa-wrench fa-4x"> </i><br /><br />
								Espace de configuration administrateur
							</h1>
						</center>
					</div>
					<?php
						if (isset($successImage)&&$successImage==true) {
							echo("<center><h2 style='color: #05c44d;'><i class='fa fa-check'> </i> Opéraion éffectuée !</h2><a href='' class='btn btn-default'><i style='font-size: 20px;' class='fa fa-home'> </i> Retour à l'acuueil</a></center>");
						} elseif(isset($successImage)&&$successImage==false) {
							echo("<center><h2 style='color: #f00b1b;'><i class='fa fa-times'> </i> Opéraion non éffectuée !</h2><a href='' class='btn btn-default'><i style='font-size: 20px;' class='fa fa-refresh'> </i> Réesayer</a></center>");
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>