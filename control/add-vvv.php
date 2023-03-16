<?php

include('dbConf.php');

if (isset($_POST['ajouter'])) {

    // Fiche
    $doyenne = $_POST['doyenne'];
    $section = $_POST['section'];
    $niveau = $_POST['niveau'];
    $titre = $_POST['titre'];
    $pfullname = $_POST['pfullname'];
    $pjob = $_POST['pjob'];
    $quartier = $_POST['quartier'];
    $pnumber = $_POST['pnumber'];
    $parent = $_POST['parent'];

    // Vaillant
    $genre = $_POST['genre'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $job = $_POST['job'];
    $habitation = $_POST['habitation'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addyear = $_POST['addyear'];
    $sante = $_POST['sante'];
    $photo = '';

    // Requête pour la table vaillant
    $stmt1 = $bdd->prepare('INSERT INTO vaillant (genre, fullname, birthday, job, habitation, phone, email, addyear, sante, photo) VALUES (:genre, :fullname, :birthday, :job, :habitation, :phone, :email, :addyear, :sante, :photo)');

    // Lien pour la table vaillant
    $stmt1->bindValue(':genre',$genre);
    $stmt1->bindValue(':fullname',$fullname);
    $stmt1->bindValue(':birthday',$birthday);
    $stmt1->bindValue(':job',$job);
    $stmt1->bindValue(':habitation',$habitation);
    $stmt1->bindValue(':phone',$phone);
    $stmt1->bindValue(':email',$email);
    $stmt1->bindValue(':addyear',$addyear);
    $stmt1->bindValue(':sante',$sante);
    $stmt1->bindValue(':photo',$photo);

    if ($stmt1->execute()) {
        
        $militant = 0;

        $reqFch = $bdd->query("SELECT idVaillant FROM vaillant ORDER BY idVaillant DESC LIMIT 1");

        while ($donV = $reqFch->fetch()) {
            $militant = $donV['idVaillant'];
        }

        $url = "add-fiche.php?militant=$militant&doyenne=$doyenne&section=$section&niveau=$niveau&titre=$titre&pfullname=$pfullname&pjob=$pjob&quartier=$quartier&pnumber=$pnumber&parent=$parent";
        header("Location: " . $url);
        
    } else {
        $message = "Enregistrement non effectué";
        $url = "../pages/admin-page.php?msg=" . urldecode($message);
        header("Location: " . $url);
    }

} else {
    header('Location: ../pages/admin-page.php');
}