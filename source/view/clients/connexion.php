<form method="post" action='index.php?action=connected&controller=clients'>
    <fieldset>
        <legend>Authentification :</legend>
        <p>
            <label for="login">Login</label> :
            <input type="text" name="login" id="login" required="required"/>
        </p>
        <p>
            <label for="mdp">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp" required="required"/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
