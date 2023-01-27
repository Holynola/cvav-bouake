<?php

include('dbConf.php');

if (isset($_POST["choix"])) {
    $anpasto = $_POST['choix'];

    if ($anpasto == 1) {
        header('Location: ../pages/work.php?pasto='.$anpasto);
    }
}