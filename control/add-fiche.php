<?php
    include('dbConf.php');

    if (isset($_GET['militant']) AND ($_GET['doyenne'])) {
        
        // Fiche
        $militant = $_GET['militant'];
        $doyenne = $_GET['doyenne'];
        $section = $_GET['section'];
        $niveau = $_GET['niveau'];
        $titre = $_GET['titre'];
        $pfullname = $_GET['pfullname'];
        $pjob = $_GET['pjob'];
        $quartier = $_GET['quartier'];
        $pnumber = $_GET['pnumber'];
        $parent = $_GET['parent'];

        // Requête pour insérer les données dans la table
        $stmt = $bdd->prepare("INSERT INTO fiche (militant, doyenne, section, niveau, anpasto, titre, pfullname, pjob, quartier, pnumber, parent, dateFiche) VALUES (:militant, :doyenne, :section, :niveau, DEFAULT, :titre, :pfullname, :pjob, :quartier, :pnumber, :parent, DEFAULT)");

        $stmt->bindParam(':militant', $militant);
        $stmt->bindParam(':doyenne', $doyenne);
        $stmt->bindParam(':section', $section);
        $stmt->bindParam(':niveau', $niveau);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':pfullname', $pfullname);
        $stmt->bindParam(':pjob', $pjob);
        $stmt->bindParam(':quartier', $quartier);
        $stmt->bindParam(':pnumber', $pnumber);
        $stmt->bindParam(':parent', $parent);

        if ($stmt->execute()) {
            $message = "Enregistrement effectué avec succès";
            $url = "../pages/admin-page.php?msg=" . urldecode($message);
            header("Location: " . $url);
        }

    } else {
        header('Location : ../pages/admin-page.php');
    }

    
?>