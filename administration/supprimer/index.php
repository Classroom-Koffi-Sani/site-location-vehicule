<?php
	include '../../includes/connection.php';

	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$id=$_GET['id'];

		$req=$bdd->prepare("SELECT * FROM vehicules WHERE id = $id");
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
	<link rel="stylesheet" type="text/css" href="../../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../../css/demo.css" />

</head>
<body>
	<?php require '../../includes/header.php'; ?><br /><br />
	<div style="margin: 0 20%; border-radius: 4px;  border: 1px solid #f00b1b;">

	

	<?php
		while ($data=$req->fetch()) {
	?>
			<div style="padding: 10px 15px; border-left: 4px solid #f00b1b;">
				Voulez vous vraiment vraiment supprimer <?php echo("<b>".$data['marque']." ".$data['modele']." ?</b>") ?>
				<a href="../" class="btn btn-default btn-sm">
					Annuler
				</a>
				<a href="traitement.php/?id=<?php echo($data['id']); ?>" class="btn btn-danger btn-sm">
					<i class="fa fa-trash"> </i>
					Supprimer
				</a>
			</div>
	<?php
		}
	?>

	</div>



	<script type="text/javascript" src="../../js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/scriptAjaxReg.js"></script>
	

</body>
</html>