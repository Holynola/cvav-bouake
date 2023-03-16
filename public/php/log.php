<?php
    include('../control/dbConf.php');
?>
<style>
    @import url("../public/css/log.css");
</style>

<section>
    <h3 class="log-title">Se connecter</h3>

    <div class="box">
        <form action="../control/signout.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="email">E-mail</label><br>
                <input type="text" name="email" maxlength="50" placeholder="Entrez votre adresse mail" required>
            </div>

            <div>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" maxlength="20" placeholder="Entrez votre mot de passe" required>
            </div>

            <div>
                <button type="submit" name="connexion">Se connecter</button>
            </div>
        </form>
    </div>

    <h3 class="sign-title">Vous n'avez pas de compte ? Créer un compte</h3>

    <div class="box">
        <form action="../control/signin.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom et Prénoms</label><br>
                <input type="text" name="nom" maxlength="30" placeholder="Entrez vos noms" required>
            </div>

            <div>
                <label for="statut">Statut</label><br>
                <select name="statut" id="statut" required>
                    <option value="">Choisissez votre statut</option>
                    <option value="superadmin">Président Diocésain</option>
                    <option value="admin">Membre du BD</option>
                    <option value="user">Responsable de Doyenné</option>
                    <option value="client">Responsable de section</option>
                </select>
            </div>

            <div>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" maxlength="50" placeholder="Entrez votre adresse email" required>
            </div>

            <div>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" id="password1" maxlength="20" placeholder="Entrez votre mot de passe" required>
            </div>

            <div>
                <label for="confpassword">Confirmer Mot de passe</label><br>
                <input type="password" name="confpassword" id="password2" maxlength="20" placeholder="Confirmer votre mot de passe" required>
            </div>

            <div id="password-error"></div>

            <div>
                <button type="submit" name="enregistrer" id="save">Enregistrer</button>
            </div>
        </form>
    </div>
</section>

<script src="../public/js/password-check.js"></script>