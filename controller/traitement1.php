<?php
require_once("connexion.php");



if (isset($_POST['modifier1']) && !empty($_POST['modifier1'])){

$requete = "UPDATE `patient` SET `nom` = ? , `prenom` = ? , `email` = ? , `mot de passe` = ?  WHERE `id` = ?";
$result = $connexion->prepare($requete);
$result->bind_param("ssssi", $_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['mdp'], $_GET['id']);
$result-> execute();    
}
header('Location: ../index1.php');