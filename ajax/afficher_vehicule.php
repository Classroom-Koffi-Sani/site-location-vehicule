<?php
	include '../includes/connection.php';

	$vide="";

	$suppr=$bdd->prepare("DELETE FROM vehicules WHERE image = ?");
	$suppr->execute(array($vide));
	$suppr->closeCursor();

	$req="SELECT * FROM vehicules LIMIT 0,12";
	$req_execute=$bdd->prepare($req);
	$req_execute->execute();
	$free=$req_execute->rowCount($req);
?>
<center>
	<h3><i class="glyphicon glyphicon-eye-open"> </i> Afficher un véhicule</h3>
	<div style="border: 1px solid #aaa; margin-right: 40px;"></div>
</center><br />

<div style="width: 60%;padding-left: 15px;">
	<table width="100%">
		<tr>
			<td width="240">
				Chercher un véhicule à afficher <i class="glyphicon glyphicon-triangle-right"> </i>
			</td>
			<td>
				<form id="search" method="post" action="recherche_afficher/">
					<div class="input-group">
						<input type="text" name="motCle" id="motCle" class="form-control" placeholder="Rechercher un par marque, modèle, serie ou matricule" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-danger" style="width: 60px;">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</td>
		</tr>
	</table>
</div><br />

<?php
	if ($free==0) {
		echo "<center><h1><b>Aucun enregistrement !</b></h1></center>";
	} else {
		echo "<div style='padding-right: 30px;'>";
		while($data=$req_execute->fetch()){
?>

<div class="col-xs-3">
	<div style="width: 100%; height: 97.5px; overflow: hidden; border-radius: 5px;">
	 	<img class="img-rounded" src="../images_voitures/<?php echo $data['image']; ?>" width="100%" />
	</div>
	<br />
	<div class="voitureDesc">
		<div class="voitureDescAdmin">
			<?php echo "<center>".$data['marque']." ".$data['modele'].",".$data['chaises']." chaises</center>
			Source d'énergie : ".$data['couleur']; ?>
		</div>
		<div style="height: 10px;"></div>
		<center>
			<a href="afficher/?id=<?php echo($data['id']); ?>" class="btn btn-info btn-sm" style="width: 100%;">
				<i class="glyphicon glyphicon-eye-open"> </i>
				<b>Afficher le véhicule</b>
			</a>
		</center>
	</div>

</div>

<?php
		
		}
?>
</div>
<a href="#" class="btn btn-primary btn-sm" style="margin-left: 15px;">
	<i class="fa fa-plus-circle"> </i>
	<b>Voir plus de résultats</b>
</a>

<?php

	}
?>
<!--
<div class="modal mKpub fade">
	<div class="modal-dialog modal-xs">
		<div class="modal-content">

			<div class="modal-header">
				<h3><i class="fa fa-wrench"> </i> <b>Caractéristiques du véhicule</b></h3>
			</div>
			<div class="modal-body rMunderline mKpubBody">
				<div style="height: 300px;">
					<img class="img-rounded" src="../images_voitures/<?php echo $img; ?>" width="100%" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-resize-small"></span> <b>Réduire</b></button> 
			</div>
			
		</div>
	</div>
</div>-->