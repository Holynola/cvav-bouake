<?php

include('dbConf.php');

if (isset($_POST['enregistrer'])) {
    
    $cvav = $_POST['cvav'];
    $periode = $_POST['periode'];
    $poste = $_POST['poste'];
    $bureau = $_POST['bureau'];

    $repo = $bdd->prepare('INSERT INTO poste (cvav, periodePoste, nomPoste, bureauPoste) VALUES (:cvav, :periodePoste, :nomPoste, :bureauPoste)');

    $repo->execute(array(
        'cvav' => $cvav,
        'periodePoste' => $periode,
        'nomPoste' => $poste,
        'bureauPoste' => $bureau
    ));

    header('Location: ../pages/fiche.php?id='.$cvav);

} else {
    header('Location: ../pages/work.php');
}