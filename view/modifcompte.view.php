<?php
require_once("../controller/connexion.php");

$requete = "INSERT TO `id`, `nom`, `prenom`, `email`, `mot de passe` FROM `medecin` WHERE `id` = ?";
$result = $connexion->prepare($requete);
$result->bind_param("i", $_GET['id']);
$result->execute();
$result->bind_result($id, $nom, $prenom, $email, $mdp);

?>
<div class="ajout">
    <h1>Modification du compte medecin </h1>
    <?php while ($result->fetch()) :?>
        <form method="POST" action="../controller/traitement1.php?id=<?= $id; ?>">

            Nom : <input type="text" name="nom" value="<?= $nom; ?>">
            Prénom : <input type="text" name="prenom" value="<?= $prenom; ?>">
            Email : <input type="email" name="email" value="<?= $email; ?>">
            Mot de passe : <input type="password" name="mdp" value="<?= $mdp; ?>" >
            <input type="submit" name="modifier1" value="Modifier">
        </form>
    <?php endwhile; ?>
</div>
