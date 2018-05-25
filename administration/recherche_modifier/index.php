<?php
	include '../../includes/connection.php';
	
	if (isset($_POST['motCle'])&&!empty($_POST['motCle'])) {
		$motCle=$_POST['motCle'];
	} else {
		header('Location: ../');
	}

	$req="SELECT * FROM vehicules WHERE marque LIKE ? OR modele LIKE ? OR serie LIKE ? OR matricule LIKE ?";
	$req_execute=$bdd->prepare($req);
	$req_execute->execute(array("%".$motCle."%","%".$motCle."%","%".$motCle."%","%".$motCle."%"));
	$free=$req_execute->rowCount($req);
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
<style type="text/css">
	body{overflow-y: hidden;}
</style>
<body id="page">

<div class="coverAdminArea">
	<div class="middleBar rmUnderline">
		<table width="100%">
			<tr>
				<td width="300">
					<i class="fa fa-cogs fa-2x"> </i>
					<i class="fa fa-wrench fa-2x"> </i>
					CarsLocation Administration
				</td>
				<td align="right" class="slogan">
					<a href="#" style="color: #fff;">
						<i class="fa fa-user"> </i>
						Lazare
					</a> |
					<a href="../../logout.php" style="color: #fff;">
						<i class="glyphicon glyphicon-log-out"> </i>
						Se déconnecter
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="container-slideLeft rmUnderline">
		<div class="row">
			<div class="col-xs-1">
				
			</div>
			<div class="col-xs-10">
				<a href="../" class="btn btn-primary btn-sm pull-left" style="margin-top: 15px;">&laquo; Retour</a>
				<center>
					<h3><i class="fa fa-search"> </i> Résultats recherche : <?php echo($free." Résultats"); ?></h3>
					<div style="border: 1px solid #aaa; margin-right: 40px;"></div>
				</center><br />

				<div style="height: 550px; overflow: auto;">
					<?php
						if ($free==0) {
							echo "<center><h1><b>Aucun Résultat !</b></h1></center>";
						} else {
							echo "<div style='padding-right: 30px;'>";
							while($data=$req_execute->fetch()){
					?>
						<div class="col-xs-3">
							<div style="width: 100%; height: 97.5px; overflow: hidden; border-radius: 5px;">
							 	<img class="img-rounded" src="../../images_voitures/<?php echo $data['image']; ?>" width="100%" />
							</div>
							<br />
							<div class="voitureDesc">
								<div class="voitureDescAdmin">
									<?php echo "<center>".$data['marque']." ".$data['modele'].",".$data['chaises']." chaises</center>
									Source d'énergie : ".$data['couleur']; ?>
								</div>
								<div style="height: 10px;"></div>
								<center>
									<a href="../afficher/?id=<?php echo($data['id']); ?>" class="btn btn-info btn-sm" style="width: 49%;">
										<i class="glyphicon glyphicon-eye-open"> </i>
										<b>Afficher</b>
									</a>
									<a href="../modifier/?id=<?php echo($data['id']); ?>" class="btn btn-default btn-sm" style="width: 49%;">
										<i class="fa fa-pencil"> </i>
										<b>Modifier</b>
									</a>
								</center>
							</div>

						</div>

						<?php
								
								}
						?>
						</div>
						<?php

							}
						?>
				</div>
				<div class="col-xs-1">
				
				</div>

			</div>
		</div>
	</div>
</div>







<script type="text/javascript" src="../../js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/scriptAjaxReg.js"></script>
	

</body>
</html>