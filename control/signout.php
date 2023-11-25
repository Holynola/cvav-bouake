<?php

include('dbConf.php');

if (isset($_POST['connexion'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $etat = "OK";

    $sql = "SELECT * FROM respo WHERE emailRes = :emailRes AND motRes = :motRes AND etatRes = :etatRes";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':emailRes', $email);
    $stmt->bindParam(':motRes', $password);
    $stmt->bindParam(':etatRes', $etat);
    $stmt->execute();

    while ($don = $stmt->fetch()) {
        $statutRes = $don['statutRes'];
    }

    $statut = $statutRes;

    if ($stmt->rowCount() > 0) {
        $_SESSION["username"] = $email;
        $url = "../pages/admin-page.php?statut=" . urldecode($statut);
        header("Location: " . $url);
    } else {
        $message = "Identifiants incorrects ou Compte inactif";
        $link = "../pages/login.php?msg=" . urldecode($message);
        header("Location: " . $link);
    }
} else {
    header('Location: ../pages/work.php');
}
    
?>