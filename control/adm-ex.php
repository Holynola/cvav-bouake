<?php

include('dbConf.php');

$ketRes = $bdd->query('SELECT * FROM respo');

// 2022-2023
// Bejamins
$ketBen = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 1');
$benj = $ketBen->rowcount();

// Cadets
$ketCad = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 2');
$cade = $ketCad->rowCount();

// Ainés
$ketAin = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 3');
$aine = $ketAin->rowCount();

// Meneurs
$ketMen = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 4 OR niveau = 5 OR niveau = 6');
$mens = $ketMen->rowCount();

// AA
$ketAas = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 7 OR niveau = 8 OR niveau = 9');
$aas = $ketAas->rowCount();

// AC
$ketAcs = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 10 OR niveau = 11 OR niveau = 12');
$acs = $ketAcs->rowCount();

// AP
$ketAps = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 2 AND niveau = 13');
$aps = $ketAps->rowCount();

// Total
$total = $benj + $cade + $aine + $mens + $aas + $acs + $aps;


// 2021-2022
// Bejamins
$ketBe = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 1');
$ben = $ketBe->rowcount();

// Cadets
$ketCa = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 2');
$cad = $ketCa->rowCount();

// Ainés
$ketAi = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 3');
$ain = $ketAi->rowCount();

// Meneurs
$ketMe = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 4 OR niveau = 5 OR niveau = 6');
$men = $ketMe->rowCount();

// AA
$ketAa = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 7 OR niveau = 8 OR niveau = 9');
$aa = $ketAa->rowCount();

// AC
$ketAc = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 10 OR niveau = 11 OR niveau = 12');
$ac = $ketAc->rowCount();

// AP
$ketAp = $bdd->query('SELECT idFiche FROM fiche WHERE anpasto = 1 AND niveau = 13');
$ap = $ketAp->rowCount();

// Total
$tot = $ben + $cad + $ain + $men + $aa + $ac + $ap;

?>