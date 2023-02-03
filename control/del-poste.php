<?php

include('dbConf.php');

$idV = $_GET['idV'];
$id = $_GET['id'];

if (isset($id)) {
    // Préparation de la requête
    $delPos = $bdd->prepare('DELETE FROM poste WHERE idPoste=:id LIMIT 1');

    // Liaison du paramètre nommé
    $delPos->bindValue(':id', $id, PDO::PARAM_INT);

    // Exécution de la requête
    $executePos = $delPos->execute();

    header("Location: ../pages/fiche.php?id=$idV");

} else {
    header("Location: ../pages/work.php");
}