<!-- <div class="Intro">
    <h1>Inscris-toi!</h1>
    <p>
        <span class="Bold">Les mauvais films font tes meilleures soirée? </span> <br>
        Inscris-toi pour découvrir de nouveaux navets tous plus mauvais les uns que les autres!
    </p>
</div> -->

<div class="Container" id="signin">
        <div class="Logo-Lg"></div>

        <form class="Form_Login" method="POST" action="">
            <div>
                <label for="fuserName">Pseudo:</label>
                <input name="fuserName" type="text" id="fuserName" required>
            </div>
            
            <div>
                <label for="Email1">Adresse e-mail:</label>
                <input name="Email1" type="text" id="Email1" required>
            </div>
            <div>
                <label for="pass1">Mot de passe:</label>
                <input name="pass1" type="text" id="pass1" required>
            </div>
            <div>
                <label for="pass2">Confirmation du mot de passe:</label>
                <input name="pass2" type="text" id="pass2" required>
            </div>

            <input type="submit" name="submit" value="Créer un compte" style="width:auto">

        </form>
    </div>