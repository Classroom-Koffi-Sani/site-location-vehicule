<?php
	include '../../includes/connection.php';
	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$id=$_GET['id'];

		if ((isset($_POST['marque'])&&!empty($_POST['marque']))||(isset($_POST['modele'])&&!empty($_POST['modele']))||(isset($_POST['fabricant'])&&!empty($_POST['fabricant']))||(isset($_POST['energie'])&&!empty($_POST['energie']))||(isset($_POST['contenance'])&&!empty($_POST['contenance']))||(isset($_POST['chaises'])&&!empty($_POST['chaises']))||(isset($_POST['vitesse_max'])&&!empty($_POST['vitesse_max']))||(isset($_POST['transmission'])&&!empty($_POST['transmission']))||(isset($_POST['acceleration'])&&!empty($_POST['acceleration']))||(isset($_POST['puissance_moteur'])&&!empty($_POST['puissance_moteur']))||(isset($_POST['serie'])&&!empty($_POST['serie']))||(isset($_POST['matricule'])&&!empty($_POST['matricule']))) {
			
			$update=$bdd->prepare("UPDATE vehicules SET marque=?, modele=?, fabricant=?, couleur=?, chaises=?,vitesse_max=?,transmission=?,acceleration=?,puissance_moteur=?,serie=?,matricule=? WHERE id=?");
			$update->execute(array($_POST['marque'],$_POST['modele'],$_POST['fabricant'],$_POST['energie'],$_POST['chaises'],$_POST['vitesse_max'],$_POST['transmission'],$_POST['acceleration'],$_POST['puissance_moteur'],$_POST['serie'],$_POST['matricule'],$id));
			$update->closeCursor();
			
			header('Location: ../modifier/?id='.$id);

		} else {
			header('Location: ./?id='.$id);
		}

	} else {
		header('Location: ./');
	}


	
?>