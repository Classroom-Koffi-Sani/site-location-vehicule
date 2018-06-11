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
	<div style="margin: 0 20%;">

	<form action="traitement.php?id=<?php echo($id); ?>" method="post">

	<?php
		while ($data=$req->fetch()) {
	?>

			<div>
				<?php echo "<img class='img-rounded' width='100%' src='../../images_voitures/".$data['image']."' />"; ?>
				
				<div><br />
					<table class="table table-bordered table-hover">
						<tr>
							<td colspan="2">
								<center><h2><i class="fa fa-pencil"> </i> Cliquez dans les champs pour Modifier</h2></center>
							</td>
						</tr>
						<tr>
							<td>
								<b>Marque</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="marque" value="<?php echo($data['marque']); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Modele</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="modele" value="<?php echo($data['modele']); ?>" >
							</td>
						</tr>
						<tr>
							<td>
								<b>Serie</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="serie" value="<?php echo($data['serie']); ?>" >
							</td>
						</tr>
						<tr>
							<td>
								<b>Matricule</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="matricule" value="<?php echo($data['matricule']); ?>" >
							</td>
						</tr>
						<tr>
							<td>
								<b>Fabricant</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="fabricant" value="<?php echo($data['fabricant']); ?>" >
							</td>
						</tr>
						<tr>
							<td>
								<b>Source d'énergie</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="energie" value="<?php echo($data['couleur']); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Contenance</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="contenance" value="<?php echo($data['contenance']); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Nombre de chaises</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="chaises" value="<?php echo($data['chaises']); ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<b>Vitesses Maximale</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="vitesse_max" value="<?php echo($data['vitesse_max']); ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<b>Transmission</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="transmission" value="<?php echo($data['transmission']); ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<b>Accélération</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="acceleration" value="<?php echo($data['acceleration']); ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<b>Puisaance moteur</b>
							</td>
							<td>
								<input class="input_Update" type="text" name="puissance_moteur" value="<?php echo($data['puissance_moteur']); ?>">
								
							</td>
						</tr>
					</table>
				</div>
			</div>

	<?php
		}
	?>

	<a href="../" class='btn btn-primary btn-sm'>&laquo; Retour</a>

	<button type="submit" class="btn btn-primary btn-sm">
		<i class="fa fa-check"> </i> Valider la modification
	</button>
	</form>
	</div><br /><br />



	<script type="text/javascript" src="../../js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/scriptAjaxReg.js"></script>
	

</body>
</html>