<?php

include('dbConf.php');

if (isset($_POST['enregistrer'])) {

    // Respo
    $nomRes = $_POST['nom'];
    $doyRes = $_POST['doyenne'];
    $secRes = $_POST['section'];
    $statutRes = $_POST['statut'];
    $emailRes = $_POST['email'];
    $motRes = $_POST['password'];

   // Requête pour insérer les données dans la table
    $stmt = $bdd->prepare("INSERT INTO respo (nomRes, doyRes, secRes, statutRes, emailRes, motRes, etatRes) VALUES (:nomRes, :doyRes, :secRes, :statutRes, :emailRes, :motRes, DEFAULT)");

    $stmt->bindParam(':nomRes', $nomRes);
    $stmt->bindParam(':doyRes', $doyRes);
    $stmt->bindParam(':secRes', $secRes);
    $stmt->bindParam(':statutRes', $statutRes);
    $stmt->bindParam(':emailRes', $emailRes);
    $stmt->bindParam(':motRes', $motRes);

    if ($stmt->execute()) {
        $url = "../pages/felix.php";
        header("Location: " . $url);
    } else {
        $message = "Enregistrement non effectué. Veuillez réessayer";
        $url = "../pages/login.php?msg=" . urldecode($message);
        header("Location: " . $url);
    }

} else {
    header('Location: ../pages/admin-page.php');
}

?>