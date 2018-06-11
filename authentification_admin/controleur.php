<?php
	include '../includes/connection.php';
	if (isset($_POST['pseudo'])&&isset($_POST['pseudo'])&&!empty($_POST['pass'])&&!empty($_POST['pass'])) {
		if ($_POST['pseudo']=="admin"&&$_POST['pass']=="admin") {
			$_SESSION['pseudo']="ok";
			header('Location: ../administration/');
		} else {
			header('Location: ./?ERROR=DATA');
		}
		
	} else {
		header('Location: ./');
	}
?>