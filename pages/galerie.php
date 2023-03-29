<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos | CV-AV Bouaké</title>
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/all.css">
    <link rel="stylesheet" href="../public/css/galerie.css">
    <link rel="stylesheet" href="../lightbox2-dev/dist/css/lightbox.min.css">
    <script src="../public/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php require_once '../public/php/header.html' ; ?>

    <h3>Galerie Photos</h3>

    <?php require_once '../public/php/gal-photo.php' ; ?>

    <?php require_once '../public/php/footer.html' ; ?>

    <script src="../lightbox2-dev/dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>