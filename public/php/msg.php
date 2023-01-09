<style>
    @import url("../public/css/msg.css");
</style>

<section>
    <div class="msg">
        <?php require_once '../public/php/contact.html' ; ?>

        <h3 class="msg-title">Envoyer un message</h3>

        <div class="msg-box">
            <form action="#">
                <div>
                    <label for="nom">Nom et Prénoms</label><br>
                    <input type="text" name="nom" maxlength="30" placeholder="Entrez vos noms" required>
                </div>

                <div>
                    <label for="profes">Profession</label><br>
                    <input type="text" name="profes" maxlength="20" placeholder="Entrez votre profession" required>
                </div>

                <div>
                    <label for="num">Numéro</label><br>
                    <input type="text" name="num" maxlength="10" placeholder="Entez votre numéro" required>
                </div>

                <div>
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" required></textarea>
                </div>

                <div>
                    <button type="submit" name="envoyer">Envoyer le message</button>
                </div>
            </form>
        </div>
    </div>
</section>