<?php

include('dbConf.php');

$sql = "SELECT DISTINCT * FROM vaillant INNER JOIN fiche ON idVaillant = militant GROUP BY vaillant.idVaillant ORDER BY fullname";
$stmt = $bdd->query($sql);

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>