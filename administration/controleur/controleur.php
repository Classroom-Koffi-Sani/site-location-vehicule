<?php
	require '../../includes/connection.php';
	
	if (isset($_POST['marque'])&&isset($_POST['modele'])&&isset($_POST['serie'])&&isset($_POST['fabricant'])&&isset($_POST['couleur'])&&isset($_POST['contenance'])&&isset($_POST['chaises'])&&isset($_POST['matricule'])&&isset($_POST['Vmax'])&&isset($_POST['transmission'])&&isset($_POST['acceleration'])&&isset($_POST['Pmoteur'])) {

		$req = $bdd->prepare("INSERT INTO vehicules (marque,modele,serie, fabricant, couleur, contenance, chaises, matricule, vitesse_max, transmission, acceleration, puissance_moteur) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$req->execute(array($_POST['marque'],$_POST['modele'],$_POST['serie'],$_POST['fabricant'],$_POST['couleur'],$_POST['contenance'],$_POST['chaises'],$_POST['matricule'],$_POST['Vmax'],$_POST['transmission'],$_POST['acceleration'],$_POST['Pmoteur']));
		$req->closeCursor();
				

		
	} else {
		
	}
?>