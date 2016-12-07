<link rel="stylesheet" href="css.css">
<form method="post" action='index.php?action=connected&controller=clients'>
  <fieldset class="form-infos">
    <label>
     Login
      <input type="text" name="login" id="login" required="required"/>
    </label>
    <label>
      Mot de passe
      <input type="password" name="mdp" id="mdp" required="required"/>
    </label>
  </fieldset>
  <fieldset class="form-action">
    <input class="form-bouton" type="submit" name="submit" value="Envoyer">
  </fieldset>
</form>

