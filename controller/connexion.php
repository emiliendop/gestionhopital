<?php
// Création de la connexion
	$connexion = new mysqli("localhost", "root", "", "gestionpatients");
	
	// Vérification de la connexion
	if ($connexion->connect_error) {
		printf("Erreur : Connexion impossible : ". $connexion->connect_error);
		exit();
	} 	
?>