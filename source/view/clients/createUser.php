<form method="post" action='index.php?action=created&controller=clients'>
    <fieldset>
        <legend>Creer un compte :</legend>
        <p>
            <label for="nomClient">Nom</label> :
            <input type="text" name="nomClient" id="nomClient" required="required" />
        </p>
        <p>
            <label for="prenomClient">Prenom</label> :
            <input type="text"  name="prenomClient" id="prenomClient" required="required"/>
        </p>
        <p>
            <label for="mail">Adresse mail</label> :
            <input type="email" name="mail" id="mail" required="required"/>
        </p>
         <p>
            <label for="adresse">Adresse</label> :
            <input type="text" name="adresse" id="adresse" required="required"/>
        </p>
         <p>
            <label for="telephone">Telephone</label> :
            <input type="text" name="telephone" id="telephone" required="required"/>
        </p>
         <p>
            <label for="dateNaissance">Date de naissance</label> :
            <input type="date" placeholder="Ex: 2016-12-01" name="dateNaissance" id="dateNaissance" required="required"/>
        </p>
         <p>
            <label for="sexe">Sexe</label> :
            <input type= "radio" name="sexe" value="homme" checked> Homme
            <input type= "radio" name="sexe" value="femme"> Femme
        </p>
    </fieldset> 
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
            <label for="mdpConf">Confirmation mot de passe</label> :
            <input type="password" name="mdpConf" id="mdpConf" required="required"/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
