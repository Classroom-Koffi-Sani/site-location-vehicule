<?php
	include '../includes/connection.php';

	if (isset($_GET['id'])&&isset($_GET['jour'])&&isset($_GET['mois'])&&isset($_GET['annee'])) {
		$insert=$bdd->prepare("UPDATE vehicules SET jour=?, mois=?, annee=? WHERE id=?");
		$insert->execute(array($_GET['jour'], $_GET['mois'], $_GET['annee'], $_GET['id']));
		$insert->closeCursor();

		header('Location: ../?ACTION=REUSSIE');
	} else {
		header('Location: ../');
	}

?>