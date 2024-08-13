<?php

include('dbConf.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM fiche WHERE militant = $id AND anpasto = 2";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $count = $stmt->rowCount();
    
    if ($count > 0) {

        $message = "La fiche existe déjà dans l'année pastorale en cours";
         $url = "../pages/admin-page.php?msg=" . urldecode($message);
        header("Location: " . $url);

    
    } else {
        $url = "../pages/add-old.php?id=$id";
        header("Location: " . $url);
    }

} else {
    header('Location: ../pages/admin-page.php');
}



?>