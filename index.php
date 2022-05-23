<?php
require_once("./controller/connexion.php");
$requete = "SELECT `id`, `nom`, `prenom`, `email`, `date de naissance`, `taille`, `poids`, `imc` FROM `patient`";
$patients = $connexion->query($requete);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des patients</title>
</head>


<body>
    <h1> Gestion des patients </h1>

    <?php if ($patients->num_rows == 0) : ?>

        <p>Aucun patient dans la base ! </p>
        <a href="view/ajout.view.php">Ajouter un patient</a>

    <?php else : ?>
        <table>
            <thead>
                <th>Numero</th>
                <th> Nom</th>
                <th> Prénom</th>
                <th> Email</th>
                <th> Date de naissance</th>
                <th> Taille</th>
                <th> Poids</th>
                <th> Imc</th>
                <th> Action</th>
            </thead>
            <tbody>
                <?php while ($patient = $patients->fetch_array(MYSQLI_ASSOC)) : ?>
                    <tr>
                        <td> <?= $patient['id']; ?></td>
                        <td> <?= $patient['nom']; ?></td>
                        <td> <?= $patient['prenom']; ?></td>
                        <td> <?= $patient['email']; ?></td>
                        <td> <?= $patient['date de naissance']; ?></td>
                        <td> <?= $patient['taille']; ?></td>
                        <td> <?= $patient['poids']; ?></td>
                        <td> <?= $patient['imc']; ?></td>
                        <td> <a href="view/modifier.view.php?id=<?= $patient['id']; ?>">Modifier</a></td>
                        <td> <a href="controller/traitement.php?id_supprimer=<?= $patient['id']; ?>" onclick="confirm('Êtes vous sur de vouloir supprimer ce patient ?');">Supprimer</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="view/ajout.view.php">Ajouter un patient</a>
        <a href="Controller/traitement.php?supprimer">Supprimer tous les patients</a>

    <?php endif; ?>
</body>

</html>