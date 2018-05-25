<?php
	include '../includes/connection.php';

	
		if (isset($_GET['ERROR'])&&$_GET['ERROR']=="DATA") {
			$err="<div style='padding: 10px; text-align: center; margin: 0 10%; border-bottom: 2px solid red; margin-bottom: 15px; font-size: 16px; color: red; font-weight: bold;'>Adresse électronique ou mot de passe non incorrects <i class='fa fa-exclamation-circle'> </i></div>";
		}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails" />
    <meta name="author" content="Codrops" />
	<title>Accueil</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/font-awesome-4.7.0/css/font-awesome.min.css" />

</head>
<body>

	<?php require '../includes/header.php'; ?>
			
	<br /><br />

	<?php echo(isset($err) ? $err : ''); ?>

	<div>
		<div class="sessionForm rmUnderline">
			<center>
				<h3 style="color: green;">
					<i class="fa fa-share"> </i>
					<b>Réservation</b>
				</h3>
				<div style="height: 20px;"></div>
			</center>
			<input type="number" class="hide" name="id" id="id" value="1" />
			<label>Date début</label> : La date du début de location<br />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="jourD" name="jourDebut" max="31" min="1" placeholder="1" />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="moisD" name="moisDebut" max="12" min="1" placeholder="1" />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="anneeD" name="anneeDebut" max="2019" min="2018" placeholder="2018" />
			<div style="height: 20px;"></div>
			<label>Date fin</label> : La date de fin de location<br />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="jourA" name="jourFin" max="31" min="1" placeholder="1" />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="moisA" name="moisFin" max="12" min="1" placeholder="1" />
			<input style="width: 32%; padding: 3px; border-radius: 4px; border: 1px solid #ccc;" type="number" id="anneeA" name="anneeFin" max="2019" min="2018" placeholder="2018" /><br />
			<div style="height: 20px;"></div>
			<button class="btn btn-danger btn-sm" id="submit_date_reservation2">
				<i class="fa fa-calendar"> </i>
				<b>Soumettre la date</b>
				<i class="fa fa-chevron-right"> </i>
			</button>

		</div>
	</div>
	
	<div class="reservation_date_request">
		
	</div>

	



	<script type="text/javascript" src="../js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript" src="../js/scriptAjaxReg.js"></script>
	

</body>
</html>