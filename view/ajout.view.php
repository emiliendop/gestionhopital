<?php
require_once("../controller/connexion.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="gestion.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un patient</title>
</head>

<body>
    
    <form action="../controller/traitement.php" method="POST">
        Nom : <input type="text" name="nom" >
        Prénom : <input type="text" name="prenom">
        Email : <input type="email" name="email" >
        Date de naissance : <input type="date" name="date de naissance" >
        Taille : <input type="number" name="taille" id="taille">
        Poids : <input type="number" name="poids" id="poids" >
        Imc: <input type="number" name="imc" id="imc" >
        <input type="submit" name="envoyer" value="Envoyer">

    </form>
    
</body>
<script src="gestion.js"></script>
</html>