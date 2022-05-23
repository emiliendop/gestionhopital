<?php
require_once("./controller/connexion.php");
$requete = "SELECT `id`, `nom`, `prenom`, `email`, `mot de passe` FROM `medecin`";
$medecins = $connexion->query($requete);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des medecins</title>
</head>


<body>
    <h1> Gestion des medecins </h1>

    <?php if ($medecins->num_rows == 0) : ?>

        <p>Aucun medecin dans la base ! </p>
        <a href="view/ajout.view.php">Ajouter un medecin</a>

    <?php else : ?>
        <table>
            <thead>
                <th>Numero</th>
                <th> Nom</th>
                <th> Prénom</th>
                <th> Email</th>
                <th> Mot de passe</th>
                <th> Action</th>
            </thead>
            <tbody>
                <?php while ($medecin = $medecins->fetch_array(MYSQLI_ASSOC)) : ?>
                    <tr>
                        <td> <?= $medecin['id']; ?></td>
                        <td> <?= $medecin['nom']; ?></td>
                        <td> <?= $medecin['prenom']; ?></td>
                        <td> <?= $medecin['email']; ?></td>
                        <td> <?= $medecin['mot de passe']; ?></td> 
                        <td> <a href="./view/modifcompte.view.php?id=<?= $medecin['id']; ?>">Modifier</a></td>
                        </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

       

    <?php endif; ?>
</body>

</html>