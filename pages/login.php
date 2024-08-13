<?php
    session_start();

    if (isset($_SESSION["username"]) && ($_SESSION['statut'])) {
        $statutRes = $_SESSION['statut'];
        $url = "admin-page.php?statut=" . urldecode($statutRes);
        header("Location: " . $url);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bienvenue sur le site officiel des CV-AV de Bouaké">
    <meta name="keywords" content="cvav, CV-AV, bouaké, enfants, forum, camp de formation">
    <meta name="author" content="Nola D. Yasuke">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="http://cvav-bouake.ci/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter | CV-AV Bouaké</title>
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/all.css">
    <link rel="stylesheet" href="../public/css/design.css">
    <script src="../public/js/jquery-3.6.0.min.js"></script>
    <!-- Icon du site -->
    <link rel="apple-touch-icon" sizes="57x57" href="../src/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../src/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../src/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../src/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../src/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../src/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../src/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../src/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../src/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../src/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../src/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/icon/favicon-16x16.png">
    <link rel="manifest" href="../src/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../src/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <?php require_once '../public/php/header.html' ; ?>

    <div class="design">
        <div class="bloc-design">
            <?php require_once '../control/add-check.php' ; ?>
            <?php require_once '../public/php/log.php' ; ?>
            <?php require_once '../public/php/aside.html' ; ?>
        </div>
    </div>

    <?php require_once '../public/php/footer.html' ; ?>
</body>
</html>