<?php
    include('../control/dbConf.php');

    $id = $_GET['id'];

    include('../control/fiches.php');
?>

<style>
    @import url("../public/css/fch.css");
</style>

<section>
    <h5 class="fch-title">Fiche CV-AV</h5>

    <div class="fiche-div">
        <?php
            while ($don1 = $rep1->fetch()) {
        ?>
        <div class="left-bar">
            <a href="#">Ajouter une photo</a>
            <div class="photo">
                <img src="../src/img/pht.jpg">
            </div>
            <h5><?= $don1['fullname'] ?></h5>
            <h6>
                <?php
                    $niv = $don1['niveau'];
                    $repNiv = $bdd->query("SELECT * FROM levels WHERE idL = $niv");
                    while ($donNiv = $repNiv->fetch()) {
                        echo $donNiv['niveau'];
                    }
                ?>
            </h6>
            <h6>
                <?php
                    $sec = $don1['section'];
                    $repSec = $bdd->query("SELECT * FROM section WHERE idS = $sec");
                    while ($donSec = $repSec->fetch()) {
                        echo $donSec['paroisse'];
                    }
                ?>
            </h6>
            <h6>
                <?php
                    $phone = $don1['phone'];
                    if (strlen($phone) < 10) {
                        echo 0 . $phone;
                    } else {
                        echo $phone;
                    }
                ?>
            </h6>
            <h6>
                <?php
                    $pnumber = $don1['pnumber'];
                    if (strlen($phone) < 10) {
                        echo 0 . $pnumber;
                    } else {
                        echo $pnumber;
                    }
                ?>
            </h6>
            <a href="mdf.php?id=<?=$id?>">Modifier</a>
        </div>
        <?php
            }
        ?>

        <div class="right-content">
            
            <div class="top-content">
                <h5>Parcours</h5>
                <hr>
                <div class="par-info">
                    <div class="info-one">
                        <span>Année Pastorale</span>
                    </div>
                    <div class="info-two">
                        <span>Niveau</span>
                    </div>
                    <div class="info-three">
                        <span>Section</span>
                    </div>
                    <div class="info-four">
                        <span>Doyenné</span>
                    </div>
                </div>
                
                <?php
                    while ($don2 = $rep2->fetch()) {
                ?>
                <div class="par-info">
                    <div>
                        <span>2021-2022</span>
                    </div>
                    <div>
                        <span>
                            <?php
                                $nivo = $don2['niveau'];
                                $repNivo = $bdd->query("SELECT * FROM levels WHERE idL = $nivo");
                                while ($donNivo = $repNivo->fetch()) {
                                    echo $donNivo['niveau'];
                                }
                            ?>
                        </span>
                    </div>
                    <div>
                        <span>
                            <?php
                                $sect = $don2['section'];
                                $repSect = $bdd->query("SELECT * FROM section WHERE idS = $sect");
                                while ($donSect = $repSect->fetch()) {
                                    echo $donSect['paroisse'];
                                }
                            ?>
                        </span>
                    </div>
                    <div>
                        <span>
                            <?php
                                $doy = $don2['doyenne'];
                                $repSect = $bdd->query("SELECT * FROM doyen WHERE idD = $doy");
                                while ($donSect = $repSect->fetch()) {
                                    echo $donSect['doyenne'];
                                }
                            ?>
                        </span>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            
            <div class="middle-content">
                <h5>Postes Occupés</h5>
                <hr>
                <div class="pos-info">
                    <div class="pos-one">
                        <span>Période</span>
                    </div>
                    <div class="pos-two">
                        <span>Poste</span>
                    </div>
                    <div class="pos-three">
                        <span>Bureau</span>
                    </div>
                    <div class="pos-four">
                        <span>Supprimer</span>
                    </div>
                </div>
                
                <?php
                    while ($don3 = $rep3->fetch()) {
                ?>
                <div class="pos-info">
                    <div>
                        <span><?= $don3['periodePoste'] ?></span>
                    </div>
                    <div>
                        <span><?= $don3['nomPoste'] ?></span>
                    </div>
                    <div>
                        <span><?= $don3['bureauPoste'] ?></span>
                    </div>
                    <div>
                        <a href="../control/del-poste.php?idV=<?= $id ?>&amp;id=<?= $don3['idPoste'] ?>">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>

                <div class="pos-btn">
                    <a href="poste.php?id=<?=$id?>">Ajouter un poste</a>
                </div>
            </div>
            <div class="bottom-content">
                <h5>Autres</h5>
                <hr>
                
                <?php
                    while ($don4 = $rep4->fetch()) {
                ?>
                <div>
                    <span>Profession :</span>
                    <?= $don4['job'] ?>
                </div>
                <div>
                    <span>Email :</span>
                    <?= $don4['email'] ?>
                </div>
                <div>
                    <span>Année d'adhésion :</span>
                    <?= $don4['addyear'] ?>
                </div>
                <div>
                    <span>Lieu d'habitation :</span>
                    <?= $don4['habitation'] ?>
                </div>
                <?php
                    }
                ?>

            </div>
        </div>
    </div>

    <div class="fiche-btn">
        <a href="#">Imprimer</a>
        <a href="#">Télécharger</a>
    </div>
</section>