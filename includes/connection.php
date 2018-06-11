<?php 

	session_start();
	
	// define parametres de connection
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'location_vehicule');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	
	try
	{
		$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER , DB_PASSWORD);
		
	} catch(PDOexception $e) {
		die('Une erreur est survenue lors de la connexion a la base donnees');
	}
?>