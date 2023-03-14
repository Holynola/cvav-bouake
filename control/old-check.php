<?php
    include('dbConf.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Préparation de la requête sql
        $sql = "SELECT * FROM fiche INNER JOIN vaillant ON militant = idVaillant AND idVaillant = $id ORDER BY idFiche DESC LIMIT 1";
        $stmt = $bdd->prepare($sql);

        // Exécution de la requête
        $stmt->execute();

        // Récupération des données
        $resultat = $stmt->fetch();   

        // Stockage des valeurs dans des variables PHP
        $genre = $resultat["genre"];
        $fullname = $resultat['fullname'];
        $birthday = $resultat['birthday'];
        $job = $resultat['job'];
        $habitation = $resultat['habitation'];
        $phone = $resultat['phone'];
        $email = $resultat['email'];
        $addyear = $resultat['addyear'];
        $sante = $resultat['sante'];

        $idF = $resultat['idFiche'];
        $doyenne = $resultat['doyenne'];
        $section = $resultat['section'];
        $niveau = $resultat['niveau'];
        $titre = $resultat['titre'];
        $pfullname = $resultat['pfullname'];
        $pjob = $resultat['pjob'];
        $quartier = $resultat['quartier'];
        $pnumber = $resultat['pnumber'];
        $parent = $resultat['parent'];

        // Récupération de la localité de la section
        $sl = "SELECT * FROM section WHERE idS = $section";
        $rek = $bdd->prepare($sl);
        $rek->execute();

        // Fermeture de la connexion
        $bdd = null;

        $result = $rek->fetch();

        $localite = $result['localite'];

    } else {
        header('Location : ../pages/admin-page.php');
    }
?>