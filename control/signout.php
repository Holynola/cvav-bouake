<?php
    
include('dbConf.php');

if (isset($_POST['connexion'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM respo WHERE emailRes = :emailRes AND motRes = :motRes";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':emailRes', $email);
    $stmt->bindParam(':motRes', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $url = "../pages/admin-page.php";
        header("Location: " . $url);
    } else {
        $message = "Email ou mot de passe incorrect";
        $link = "../pages/login.php?msg=" . urldecode($message);
        header("Location: " . $link);
    }
} else {
    header('Location: ../pages/work.php');
}
    
?>