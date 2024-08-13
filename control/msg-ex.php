<?php

include('dbConf.php');

if (isset($_POST['nom']) && ($_POST['profes'])) {

    $nom = $_POST['nom'];
    $profes = $_POST['profes'];
    $num = $_POST['num'];
    $message = $_POST['message'];

    $stmt = $bdd->prepare("INSERT INTO msges (nomMess, profMess, numMess, texteMess, dateMess) VALUES (:nomMess, :profMess, :numMess, :texteMess, DEFAULT)");

    $stmt->bindParam(':nomMess', $nom);
    $stmt->bindParam(':profMess', $profes);
    $stmt->bindParam(':numMess', $num);
    $stmt->bindParam(':texteMess', $message);

    if ($stmt->execute()) {
        $msg = "Votre message a été envoyé";
        $url = "../pages/contacts.php?msg=" . urldecode($msg);
        header("Location: " . $url);
    }
} else {
    header('Location: ../pages/index.php');
}

?>