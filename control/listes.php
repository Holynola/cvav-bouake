<?php

include('dbConf.php');

if (isset($anneepasto) && ($niveaux)) {
    $anpasto = $anneepasto;
    $niveau = $niveaux;
} else {
    header("Location: work.php");
}

// Légion
switch ($niveau) {
    case 1:
        $legion = 'Benjamins';
        break;

    case 2:
        $legion = 'Cadets';
        break;

    case 3:
        $legion = 'Ainés';
        break;

    case 4:
        $legion = 'Meneurs';
        break;

    case 7:
        $legion = 'Aspirants Accompagnateurs';
        break;

    case 10:
        $legion = 'Accompagnateurs';
        break;

    case 13:
        $legion = 'Accompagnateurs Principaux';
        break;

    case 20:
        $legion = 'CV-AV';
        break;
}

// Année pastorale
$anp = "SELECT * FROM anneepasto WHERE idPasto = :id";
$repAnp = $bdd->prepare($anp);
$repAnp->execute(array('id' => $anpasto));

while ($anpList = $repAnp->fetch()) {
    $pasto = $anpList['pasto'];
}

// Recherche des données dans la bd
if ($niveau == 20) {
    $query = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND anpasto = :anpasto ORDER BY fullname ASC";
    $rep = $bdd->prepare($query);
    $rep->execute(array('anpasto' => $anpasto));
} else {
    $query = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND anpasto = :anpasto AND niveau = :niveau ORDER BY fullname ASC";
    $rep = $bdd->prepare($query);
    $rep->execute(
        array (
            'anpasto' => $anpasto,
            'niveau' => $niveau
        )
    );
}

$count = $rep->rowCount();