<?php

include('dbConf.php');

for ($i = 1; $i < 14; $i++) {
    $query = "SELECT * FROM fiche WHERE anpasto = :anpasto AND niveau = :niveau";
    $repList = $bdd->prepare($query);
    $repList->execute(
        array (
            'anpasto' => 1,
            'niveau' => $i
        )
    );

    $doy1 = 0;
    $doy2 = 0;
    $doy3 = 0;
    $doy4 = 0;
    
    while ($donList = $repList->fetch()) {
        
        switch ($donList['doyenne']) {
            case 1:
                $doy1 = $doy1 + 1;
                break;
            
            case 2:
                $doy2 = $doy2 + 1;
                break;

            case 3:
                $doy3 = $doy3 + 1;
                break;

            case 4:
                $doy4 = $doy4 + 1;
                break;
        }
    }

    switch ($i) {
        // Benjamins
        case 1:
            $ben = array($doy1,$doy2,$doy3,$doy4);
            break;
        
        // Cadets
        case 2:
            $cad = array($doy1,$doy2,$doy3,$doy4);
            break;
        
        // Ainés
        case 3:
            $ain = array($doy1,$doy2,$doy3,$doy4);
            break;

        // Meneurs
        case 4:
            $men1 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 5:
            $men2 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 6:
            $men3 = array($doy1,$doy2,$doy3,$doy4);
            break;

        // AA
        case 7:
            $aa1 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 8:
            $aa2 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 9:
            $aa3 = array($doy1,$doy2,$doy3,$doy4);
            break;

        // AC
        case 10:
            $ac1 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 11:
            $ac2 = array($doy1,$doy2,$doy3,$doy4);
            break;

        case 12:
            $ac3 = array($doy1,$doy2,$doy3,$doy4);
            break;

        // AP
        case 13:
            $ap = array($doy1,$doy2,$doy3,$doy4);
    }

}

// Meneurs
$men = array();
for ($m = 0; $m < 4; $m++) {
    $men[$m] = $men1[$m] + $men2[$m] + $men3[$m];
}

// AA
$aa = array();
for ($a = 0; $a < 4; $a++) {
    $aa[$a] = $aa1[$a] + $aa2[$a] + $aa3[$a];
}

// AC
$ac = array();
for ($c = 0; $c < 4; $c++) {
    $ac[$c] = $ac1[$c] + $ac2[$c] + $ac3[$c];
}

// Totaux
$benjamins = $ben[0] + $ben[1] + $ben[2] + $ben[3];
$cadets = $cad[0] + $cad[1] + $cad[2] + $cad[3];
$aines = $ain[0] + $ain[1] + $ain[2] + $ain[3];
$meneurs = $men[0] + $men[1] + $men[2] + $men[3];
$aas = $aa[0] + $aa[1] + $aa[2] + $aa[3];
$acs = $ac[0] + $ac[1] + $ac[2] + $ac[3];
$aps = $ap[0] + $ap[1] + $ap[2] + $ap[3];

$all = $benjamins + $cadets + $aines + $meneurs + $aas + $acs + $aps;
$all1 = $ben[0] + $cad[0] + $ain[0] + $men[0] + $aa[0] + $ac[0] + $ap[0];
$all2 = $ben[1] + $cad[1] + $ain[1] + $men[1] + $aa[1] + $ac[1] + $ap[1];
$all3 = $ben[2] + $cad[2] + $ain[2] + $men[2] + $aa[2] + $ac[2] + $ap[2];
$all4 = $ben[3] + $cad[3] + $ain[3] + $men[3] + $aa[3] + $ac[3] + $ap[3];