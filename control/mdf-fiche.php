<?php

include('dbConf.php');

if (isset($_GET['militant']) AND ($_GET['doyenne'])) {

    // Fiche
    $idF = $_GET['idF'];
    $militant = $_GET['militant'];
    $doyenne = $_GET['doyenne'];
    $section = $_GET['section'];
    $niveau = $_GET['niveau'];
    $titre = $_GET['titre'];
    $pfullname = $_GET['pfullname'];
    $pjob = $_GET['pjob'];
    $quartier = $_GET['quartier'];
    $pnumber = $_GET['pnumber'];
    $parent = $_GET['parent'];

    // Préparation de la requête SQL
    $sql = "UPDATE fiche SET militant = :militant, doyenne = :doyenne, section = :section, niveau = :niveau, titre = :titre, pfullname = :pfullname, pjob = :pjob, quartier = :quartier, pnumber = :pnumber, parent = :parent WHERE idFiche = :idFiche";
    $stmt = $bdd->prepare($sql);

    // Exécution de la requête avec les données du formulaire
    $stmt->execute([
        'militant' => $militant,
        'doyenne' => $doyenne,
        'section' => $section,
        'niveau' => $niveau,
        'titre' => $titre,
        'pfullname' => $pfullname,
        'pjob' => $pjob,
        'quartier' => $quartier,
        'pnumber' => $pnumber,
        'parent' => $parent,
        'idFiche' => $idF
    ]);

    $message = "Modification effectuée avec succès";
    $url = "../pages/admin-page.php?msg=" . urldecode($message);
    header("Location: " . $url);

} else {
    header('Location: ../pages/admin-page.php');
}

?>