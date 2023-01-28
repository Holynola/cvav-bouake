<?php

include('dbConf.php');

if (isset($id)) {
    $idV = $id;
} else {
    header("Location: work.php");
}

$query1 = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND idVaillant = :idVaillant ORDER BY idFiche DESC LIMIT 1";
$rep1 = $bdd->prepare($query1);
$rep1->execute(array('idVaillant' => $idV));

$query2 = "SELECT * FROM fiche WHERE militant = :militant";
$rep2 = $bdd->prepare($query2);
$rep2->execute(array('militant' => $idV));

$query3 = "SELECT $ FROM poste WHERE cvav = :cvav";
$rep3 = $bdd->prepare($query3);
$count = $rep3->rowCount();
if ($count > 0)
    $rep3->execute(array('cvav' => $idV));

$query4 = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND idVaillant = :idVaillant ORDER BY idFiche DESC LIMIT 1";
$rep4 = $bdd->prepare($query4);
$rep4->execute(array('idVaillant' => $idV));