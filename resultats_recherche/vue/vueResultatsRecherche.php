<?php
	require '../includes/header.php';
	require 'controleur/controlRecherche.php';

	$motCle = new SearchResult();
	$motCle->Recherche($_POST['motCle']);
?>