<?php
	include 'includes/connection.php';
	$query="SELECT * FROM vehicules LIMIT 0,6";
	$req=$bdd->prepare($query);
	$req->execute();
	$check=$req->rowCount($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
	<title>Accueil</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />

</head>
<body id="page">

	<?php
		require 'vue/vueIndex.php';
	?>

	<br />
	<?php include 'includes/footer.php'; ?>
	<br />
	<script type="text/javascript" src="js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>