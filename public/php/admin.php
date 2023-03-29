<?php
    include('../control/dbConf.php');
    include('../control/adm-ex.php');
?>
<style>
    @import url("../public/css/admin.css");
</style>

<section>
    <h4>Page de gestion</h4>

    <div class="compte-box">
        <h5>Liste des comptes utilisateurs</h5>
        <hr>
        <div class="compte-content">
            <div class="content-one">Nom et Prénoms</div>
            <div class="content-two">Poste Occupé</div>
            <div class="content-three">Statut du compte</div>
            <div class="content-four"></div>
        </div>

        <?php
            while ($donRes = $ketRes->fetch()) {
        ?>
        <div class="compte-content">
            <div><?= $donRes['nomRes'] ?></div>
            <div>
            <?php
                $poste = $donRes['statutRes'];

                switch ($poste) {
                    case 'superadmin':
                        echo 'Président Diocésain';
                        break;

                    case 'admin':
                        echo 'Membre du BD';
                        break;

                    case 'user':
                        echo 'Responsable de Doyenné';
                        break;

                    case 'client':
                        echo 'Responsable de section';
                        break;
                }
            ?>
            </div>
            <div>
            <?php
                $etat = $donRes['etatRes'];

                switch ($etat) {
                    case 'OK':
                        echo 'Activé';
                        break;

                    case 'KO':
                        echo 'Désactivé';
                        break;
                }
            ?>
            </div>
            <div>
                <a href="#" class="enable" style="<?php if($etat == 'OK') {echo 'display: none';} ?>">Activer</a>
                <a href="#" class="disable" style="<?php if($etat == 'KO') {echo 'display: none';} ?>">Désactiver</a>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="effectif">
        <h5>Effectifs 2022-2023</h5>
        <hr>

        <div class="eff-content">
            <div class="eff-left">
                <div>
                    <span class="title">Benjamins : </span>
                    <span><?= $benj ?></span>
                </div>
                <div>
                    <span class="title">Cadets : </span>
                    <span><?= $cade ?></span>
                </div>
                <div>
                    <span class="title">Ainés : </span>
                    <span><?= $aine ?></span>
                </div>
                <div>
                    <span class="title">Meneurs : </span>
                    <span><?= $mens ?></span>
                </div>
                <div>
                    <span class="title">Aspirants Accompagnateurs : </span>
                    <span><?= $aas ?></span>
                </div>
                <div>
                    <span class="title">Accompagnateurs : </span>
                    <span><?= $acs ?></span>
                </div>
                <div>
                    <span class="title">Accompagnateurs Principaux : </span>
                    <span><?= $aps ?></span>
                </div>
                <div>
                    <span class="title" style="color: #1360a0">Total : </span>
                    <span><?= $total ?></span>
                </div>
            </div>
            <div class="eff-right">
                <div>
                    <a href="old-list.php">Ajouter un(e) militant(e) existant(e)</a>
                </div>
                <div>
                    <a href="add.php">Ajouter un(e) nouveau(velle) militant(e)</a>
                </div>
                <div>
                    <a href="work.php">Plus de détails</a>
                </div>
            </div>
        </div>
    </div>

    <div class="effectif">
        <h5>Effectifs 2021-2022</h5>
        <hr>

        <div class="eff-content">
            <div class="eff-left">
                <div>
                    <span class="title">Benjamins : </span>
                    <span><?= $ben ?></span>
                </div>
                <div>
                    <span class="title">Cadets : </span>
                    <span><?= $cad ?></span>
                </div>
                <div>
                    <span class="title">Ainés : </span>
                    <span><?= $ain ?></span>
                </div>
                <div>
                    <span class="title">Meneurs : </span>
                    <span><?= $men ?></span>
                </div>
                <div>
                    <span class="title">Aspirants Accompagnateurs : </span>
                    <span><?= $aa ?></span>
                </div>
                <div>
                    <span class="title">Accompagnateurs : </span>
                    <span><?= $ac ?></span>
                </div>
                <div>
                    <span class="title">Accompagnateurs Principaux : </span>
                    <span><?= $ap ?></span>
                </div>
                <div>
                    <span class="title" style="color: #1360a0">Total : </span>
                    <span><?= $tot ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="blog">
        <h5>Blog</h5>
        <hr>

        <div class="blog-content">
            <div class="blog-left">
                <!-- Activités -->
                <div class="content">
                    <span>Actvités : </span>000
                </div>

                <!-- Réunions -->
                <div class="content">
                    <span>Réunions : </span>000
                </div>

                <!-- Enseignements -->
                <div class="content">
                    <span>Enseignements : </span>000
                </div>

                <!-- Jeux -->
                <div class="content">
                    <span>Jeux : </span>000
                </div>
            </div>
            
            <div class="blog-right">
                <!-- Activités -->
                <div class="content">
                    <a href="#">Ajouter une activité</a>
                </div>

                <!-- Réunions -->
                <div class="content">
                    <a href="#">Ajouter une réunion</a>
                </div>

                <!-- Enseignements -->
                <div class="content">
                    <a href="#">Ajouter un enseignement</a>
                </div>

                <!-- Jeux -->
                <div class="content">
                    <a href="#">Ajouter un jeu</a>
                </div>
            </div>

            <div class="blog-last">
                <a href="blogs.php">Plus de détails</a>
            </div>
        </div>
    </div>

    <div class="btm-div">
        <a href="../control/logout.php">Se déconnecter</a>
    </div>
</section>