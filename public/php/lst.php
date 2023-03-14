<?php
    include('../control/dbConf.php');

    $anneepasto = $_GET['anneepasto'];
    $niveaux = $_GET['niveau'];

    include('../control/listes.php');
?>
<style>
    @import url("../public/css/lst.css");
</style>

<section class="list-section">
    <h4>Liste des <?= $legion ?> : <?= $count ?> militants</h4>
    <h5>Année Pastorale : <?= $pasto ?></h5>
    <hr>

    <?php
        while ($don = $rep->fetch()) {
    ?>
    <div class="list-div">
        <div class="name-box">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span><?= $don['fullname'] ?></span>
        </div>
        
        <div class="doy-box">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>
                <?php
                    $sec = $don['section'];
                    $repSec = $bdd->query("SELECT * FROM section WHERE idS = $sec");
                    while ($donSec = $repSec->fetch()) {
                        echo $donSec['paroisse'];
                    }
                ?>
            </span>
            <br>
            <span>
                <?php
                    $doy = $don['doyenne'];
                    $repDoy = $bdd->query("SELECT * FROM doyen WHERE idD = $doy");
                    while ($donDoy = $repDoy->fetch()) {
                        echo $donDoy['doyenne'];
                    }
                ?>
            </span>
        </div>
        
        <div class="btn-box">
            <a href="fiche.php?id=<?=$don['idVaillant']?>" title="Voir la fiche CV-AV">
                <i class="fa fa-file" aria-hidden="true"></i>
            </a>
            
            <a href="mdf.php?id=<?=$don['idVaillant']?>" title="Modifier" style="<?php if ($anneepasto != 2) echo 'display: none'; ?>">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            
            <a href="../control/del.php?id=<?=$don['idFiche']?>" title="Supprimer" style="<?php if ($anneepasto != 2) echo 'display: none'; ?>" class="delFiche">
                <i class="fa fa-window-close-o" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <?php
        }
    ?>
</section>

<script src="../public/js/del.js"></script>