<?php
    include('../control/dbConf.php');

    $id = $_GET['id'];

    include('../control/post-ex.php');
?>

<style>
    @import url("../public/css/pst.css");
</style>

<section>
    <h5>Ajouter un poste</h5>

    <div class="poste-top">
        <?php
            while ($don = $rep->fetch()) {
        ?>

        <div>
            <span>Nom et Prénoms :</span>
            <?= $don['fullname'] ?>
        </div>
        <div>
            <span>Niveau :</span>
            <?php
                $niv = $don['niveau'];
                $repNiv = $bdd->query("SELECT * FROM levels WHERE idL = $niv");
                while ($donNiv = $repNiv->fetch()) {
                    echo $donNiv['niveau'];
                }
            ?>
        </div>
        <div>
            <span>Section :</span>
            <?php
                $sec = $don['section'];
                $repSec = $bdd->query("SELECT * FROM section WHERE idS = $sec");
                while ($donSec = $repSec->fetch()) {
                    echo $donSec['paroisse'];
                }
            ?>
        </div>
        <div>
            <span>Doyenné :</span>
            <?php
                $doy = $don['doyenne'];
                $repSect = $bdd->query("SELECT * FROM doyen WHERE idD = $doy");
                while ($donSect = $repSect->fetch()) {
                    echo $donSect['doyenne'];
                }
            ?>
        </div>

        <?php } ?>
    </div>

    <div class="poste-bottom">
        <form action="../control/postes.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="number" name="cvav" value="<?= $id ?>" style="display: none;">
                <label for="periode">Période :</label><br>
                <input type="text" maxlength="9" name="periode" required><br>
                <span>Exemple : 2020-2022</span>
            </div>
            <div>
                <label for="poste">Poste :</label><br>
                <textarea name="poste" id="poste" required></textarea><br>
                <span>Exemple : Responsable de section</span>
            </div>
            <div>
                <label for="bureau">Bureau :</label><br>
                <textarea name="bureau" id="bureau" required></textarea><br>
                <span>Exemple : Section Saint Pierre de Nimbo</span>
            </div>
            <div>
                <button type="submit" name="enregistrer">Enregistrer</button>
            </div>
        </form>
    </div>
</section>