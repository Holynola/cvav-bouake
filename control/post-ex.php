<?php

include('dbConf.php');

if (isset($id)) {
    $idV = $id;
} else {
    header("Location: work.php");
}

$query = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND idVaillant = :idVaillant ORDER BY idFiche DESC LIMIT 1";
$rep = $bdd->prepare($query);
$rep->execute(array('idVaillant' => $idV));