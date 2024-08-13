<?php
    include('dbConf.php');

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        // Préparation et exécution de la requête SQL
        $stmt = $bdd->prepare('DELETE FROM fiche WHERE idFiche = :idFiche');
        $stmt->execute(array(':idFiche' => $id));

        $message = "La fiche a été supprimée avec succès";
        $url = "../pages/admin-page.php?msg=" . urldecode($message);
        header("Location: " . $url);

    } else {
        header('Location: ../pages/admin-page.php');
    }
?>