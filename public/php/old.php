<?php
    include('../control/dbConf.php');
    include('../control/old-ex.php');
?>
<style>
    @import url("../public/css/old.css");
</style>

<section>
    <div class="old">
        <h4>Liste des militants(es) existants(es)</h4>
        
        <h5>(Cliquer sur la légion pour afficher la liste)</h5>

        <div>
            <button id="toggleBen">Benjamins</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if ($row['niveau'] == 1) {
                ?>
                    <div class="benDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>

        <div>
            <button id="toggleCad">Cadets</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if ($row['niveau'] == 2) {
                ?>
                    <div class="cadDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
        
        <div>
            <button id="toggleAin">Ainés</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if ($row['niveau'] == 3) {
                ?>  
                    <div class="ainDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
        
        <div>
            <button id="toggleMen">Meneurs</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if (($row['niveau'] == 4) OR ($row['niveau'] == 5) OR ($row['niveau'] == 6)) {
                ?>
                    <div class="menDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
        
        <div>
            <button id="toggleAas">Aspirants Accompagnateurs</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if (($row['niveau'] == 7) OR ($row['niveau'] == 8) OR ($row['niveau'] == 9)) {
                ?>
                    <div class="aasDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
        
        <div>
            <button id="toggleAcs">Accompagnateurs</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if (($row['niveau'] == 10) OR ($row['niveau'] == 11) OR ($row['niveau'] == 12)) {
                ?>
                    <div class="acsDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
        
        <div>
            <button id="toggleAps">Accompagnateurs Principaux</button>
        </div>
        <?php
            foreach ($resultat as $row) {
                if ($row['niveau'] == 13) {
                ?>  
                    <div class="apsDiv" style="display: none;">
                        <a href="../control/old.php?id=<?= $row['idVaillant'] ?>"><?= $row['fullname'] ?></a>
                    </div>
                <?php
                }
            }
        ?>
    </div>

    <div class="add-btn">
        <a href="add.php">Ajouter un(e) nouveau(velle) militant(e)</a>
    </div>
    
</section>

<script src="../public/js/toggle.js"></script>