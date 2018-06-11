<?php
	include '../../includes/connection.php';

	if(isset($_GET['id'])&&!empty($_GET['id'])) {
		$id=$_GET['id'];

		$delete=$bdd->prepare("DELETE FROM vehicules WHERE id=$id");
		$delete->execute();
		$delete->closeCursor();

		header('Location: ../');
	} else {
		header('Location: ./?id='.$id);
	}
?>