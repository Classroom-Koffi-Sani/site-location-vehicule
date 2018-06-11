<?php
	include '../includes/connection.php';
	
	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$motCle=$_GET['id'];
		$req=$bdd->prepare("SELECT * FROM vehicules WHERE id = $motCle");
		$req->execute();

	} else {
		header('Location: ../');
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
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />

</head>
<style type="text/css">
	body{overflow-y: hidden;}
</style>
<body id="page">
	<?php include '../includes/header.php'; ?>

<div class="coverAdminArea">
	<div class="container-slideLeft rmUnderline">
		<div class="row">
			<div class="col-xs-1">
				
			</div>
			<div class="col-xs-10"><br /><br />
				<div style="border: 1px solid #24d770; border-radius: 5px;">
					<div style="padding: 10px 15px; border-left: 3px solid #24d770;">
						<?php
							while($data=$req->fetch()){
								echo("Confirmez-vous la réservation du véhicule <b>".$data['marque']." ".$data['modele']."</b> ?");
							}
						?>
						
						<a href="../" class="btn btn-default btn-sm">Annuler</a>
						<a href="traitement.php?id=<?php echo($_GET['id']); ?>&jour=<?php echo $_GET['jour']; ?>&mois=<?php echo $_GET['mois']; ?>&annee=<?php echo $_GET['annee']; ?>" class="btn btn-success btn-sm"><i class="fa fa-check"> </i> Confirmer</a>
					</div>
				</div>
			</div>
			<div class="col-xs-1">
				
			</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="../js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript" src="../js/scriptAjaxReg.js"></script>
	

</body>
</html>