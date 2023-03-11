<?php

include('dbConf.php');

if (isset($_POST['ajouter'])) {

    // Fiche
    $militant = $_POST['id'];
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
    $id = $_POST['id'];
    $genre = $_POST['genre'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $job = $_POST['job'];
    $habitation = $_POST['habitation'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addyear = $_POST['addyear'];
    $sante = $_POST['sante'];

    // Préparation de la requête SQL
    $sql = "UPDATE vaillant SET genre = :genre, fullname = :fullname, birthday = :birthday, job = :job, habitation = :habitation, phone = :phone, email = :email, addyear = :addyear, sante = :sante WHERE idVaillant = :idVaillant";
    $stmt = $bdd->prepare($sql);

    // Exécution de la requête avec les données du formulaire
    $stmt->execute([
        'genre' => $genre,
        'fullname' => $fullname,
        'birthday' => $birthday,
        'job' => $job,
        'habitation' => $habitation,
        'phone' => $phone,
        'email' => $email,
        'addyear' => $addyear,
        'sante' => $sante,
        'idVaillant' => $id
    ]);

    $url = "add-fiche.php?militant=$militant&doyenne=$doyenne&section=$section&niveau=$niveau&titre=$titre&pfullname=$pfullname&pjob=$pjob&quartier=$quartier&pnumber=$pnumber&parent=$parent";
    header("Location: " . $url);
}

?>