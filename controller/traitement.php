<?php
require_once("connexion.php");

if (isset($_POST['envoyer']) && !empty($_POST['envoyer'])){
    //Exemple d'une insertion
	$requete = "INSERT INTO `patient` (`nom`, `prenom`, `email`, `date de naissance`, `taille`, `poids`, `imc`) 
	VALUES ('".$_POST['nom']."', '".$_POST['prenom']."','". $_POST['email']."','".$_POST['date de naissance']."', '".$_POST['taille']."','". $_POST['poids']."','". $_POST['imc']."')";
    $connexion->query($requete);
}
                                              

if (isset($_POST['modifier']) && !empty($_POST['modifier'])){

    $requete = "UPDATE `patient` SET `nom` = ? , `prenom` = ? , `email` = ? , `date de naissance` = ? , `taille` = ? , `poids` = ? , `imc` = ?  WHERE `id` = ?";
    $result = $connexion->prepare($requete);
    $result->bind_param("ssssiiii", $_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['date de naissance'], $_POST['taille'], $_POST['poids'],$_POST['imc'], $_GET['id']);
    $result-> execute();    
}

if (isset($_GET['id_supprimer']) && !empty($_GET['id_supprimer'])){
    $requete = "DELETE FROM `patient` WHERE `id` = ?";
    $result = $connexion->prepare($requete);
    $result->bind_param("i", $_GET['id_supprimer']);
    $result-> execute(); 
}

if (isset($_GET['supprimer'])){
    $requete = "TRUNCATE TABLE `patient`";
    $connexion->query($requete);
}
header('Location: ../index.php');