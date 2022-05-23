<?php
require_once("../controller/connexion.php");

$requete = "INSERT TO `id`, `nom`, `prenom`, `email`,`date de naissance`,`taille`, `poids`, `imc` FROM `patient` WHERE `id` = ?";
$result = $connexion->prepare($requete);
$result->bind_param("i", $_GET['id']);
$result->execute();
$result->bind_result($id, $nom, $prenom, $email, $date, $taille, $poids, $imc);

?>
<div class="ajout">
    <h1>Modification du patient </h1>
    <?php while ($result->fetch()) :?>
        <form method="POST" action="../controller/traitement.php?id=<?= $id; ?>">

            Nom : <input type="text" name="nom" value="<?= $nom; ?>">
            Prénom : <input type="text" name="prenom" value="<?= $prenom; ?>">
            Email : <input type="email" name="email" value="<?= $email; ?>">
            Date de naissance : <input type="date" name="date de naissance" value="<?= $date; ?>" >
            Taille : <input type="number" name="taille" value="<?= $taille; ?>">
            Poids : <input type="number" name="poids" value="<?= $poids; ?>">
            Imc: <input type="number" name="imc" value="<?= $imc; ?>">
            <input type="submit" name="modifier" value="Modifier">
        </form>
    <?php endwhile; ?>
</div>
