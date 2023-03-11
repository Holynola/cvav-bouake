<?php
    include('../control/dbConf.php');
    include('../control/add-ex.php');
    include('../control/old-check.php');
?>

<style>
    @import url("../public/css/add-mdf.css");
</style>

<section>
    <h3>Ajouter une fiche</h3>

    <form action="../control/add-old.php" method="post" enctype="multipart/form-data">
        <div class="add-content">
            <div class="mili-content">
                <h4>1- Militant(e)</h4>
                <hr>

                <div class="user-details"">
                    <div class="input-box" style="display: none
                    ;">
                        <input type="text" name="id" id="id" value="<?= $id ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Genre</span>
                        <?php
                            while ($donGen = $repGen->fetch()) {
                        ?>
                        <input type="radio" name="genre" value="<?= $donGen['idG'] ?>" <?php if ($genre == $donGen['idG']) echo ' checked '; ?> required>
                        <label for="<?= $donGen['idG'] ?>"><?= $donGen['genre'] ?></label>
                        <?php } ?>
                    </div>

                    <div class="input-box">
                        <span class="details">Doyenné</span>
                        <select name="doyenne" id="doyenne" required>
                            <option value="0"></option>
                            <?php
                                while ($donDoy = $repDoy->fetch()) {
                            ?>
                            <option value="<?= $donDoy['idD'] ?>" <?php if ($doyenne == $donDoy['idD']) echo 'selected'; ?>><?= $donDoy['doyenne'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Section de base</span>
                        <select name="section" id="section" required>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Nom et Prénoms</span>
                        <input type="text" name="fullname" value="<?= $fullname ?>" style="text-transform: uppercase;" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" name="birthday" value="<?= $birthday ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Fonction</span>
                        <input type="text" name="job" value="<?= $job ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Ville/Commune/Village</span>
                        <input type="text" name="habitation" value="<?= $habitation ?>" placeholder="Lieu d'habitation" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Niveau</span>
                        <select name="niveau" id="niveau" required>
                            <option value=""></option>
                            <?php
                                while ($donLev = $repLev->fetch()) {
                            ?>
                            <option value="<?= $donLev['idL'] ?>" <?php if ($niveau == $donLev['idL']) echo 'selected'; ?>><?= $donLev['niveau'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="tel" name="phone" value="<?= $phone ?>" minlength="10" maxlength="10">
                    </div>

                    <div class="input-box">
                        <span class="details">E-mail</span>
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Année d'adhésion</span>
                        <input type="number" name="addyear" value="<?= $addyear ?>" minlength="4" maxlength="4">
                    </div>

                    <div class="input-box">
                        <span class="details">Maladie chronique</span>
                        <input type="text" name="sante" value="<?= $ante ?>">
                    </div>
                </div>
            </div>

            <div class="parent-content">
                <h4>2- Parent</h4>
                <hr>

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Titre</span>
                        <?php
                            while ($donTle = $repTle->fetch()) {
                        ?>
                        <input type="radio" name="titre" value="<?= $donTle['idT'] ?>" <?php if ($titre == $donTle['idT']) echo ' checked '; ?> required>
                        <label for="<?= $donTle['idT'] ?>"><?= $donTle['titre'] ?></label>
                        <?php } ?>
                    </div>

                    <div class="input-box">
                        <span class="details">Nom et Prénoms</span>
                        <input type="text" name="pfullname" value="<?= $pfullname ?>" style="text-transform: uppercase;" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Profession</span>
                        <input type="text" name="pjob" value="<?php $pjob ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Quartier</span>
                        <input type="text" name="quartier" value="<?= $quartier ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="tel" name="pnumber" value="<?= $pnumber ?>" minlength="10" maxlength="10" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Lien de parenté</span>
                        <select name="parent" id="parent" required>
                            <option value=""></option>
                            <?php
                                while ($donMif = $repMif->fetch()) {
                            ?>
                            <option value="<?= $donMif['idM'] ?>" <?php if ($parent == $donMif['idM']) echo 'selected'; ?>><?= $donMif['parent'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="add-btn">
                <input type="submit" name="ajouter" value="Enregistrer">
            </div>
        </div>
    </form>
</section>

<script src="../public/js/add.js"></script>