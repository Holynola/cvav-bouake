<?php

include('dbConf.php');

if (isset($_GET['id']) AND ($_GET['etat'])) {

    $etat = $_GET['etat'];
    if ($etat == "OK") {
        $etatRes = "KO";
    } else {
        $etatRes = "OK";
    }

    $idRes = $_GET['id'];

    // Préparation de la requête SQL
    $sql = "UPDATE respo SET etatRes = :etatRes WHERE idRes = :idRes";
    $stmt = $bdd->prepare($sql);

    // Exécution de la requête de modification de la table Respo
    $stmt->execute([
        'etatRes' => $etatRes,
        'idRes' => $idRes
    ]);

    if ($etatRes == "OK") {
        $message = "Le compte a été activé";
    } else {
        $message = "Le compte a été désactivé";
    }

    $stt = $_GET['stt'];

    $url = "../pages/admin-page.php?msg=" . urldecode($message) . "&statut=" . urldecode($stt);
    header("Location: " . $url);
}

?>