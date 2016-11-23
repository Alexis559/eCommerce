<form method="post" action='index.php?action=created'>
    <fieldset>
        <legend>Ajouter une figurine :</legend>
        <p>
            <label for="nomProduit">Nom: </label> :
            <input type="text" placeholder="Ex : Figurine" name="nomProduit" id="nomProduit" />
        </p>
        <p>
            <label for="qteStock">Qantité en stock</label> :
            <input type="text" placeholder="10" name="qteStock" id="qteStock" />
        </p>
        <p>
            <label for="categorie">Catégorie</label> :
            <input type="text" placeholder="..." name="categorie" id="categorie" />
        </p>
         <p>
            <label for="prix">Prix</label> :
            <input type="text" placeholder="100" name="prix" id="prix" />
        </p>
         <p>
            <label for="poids">Poids</label> :
            <input type="text" placeholder="65.51" name="poids" id="poids" />
        </p>
         <p>
            <label for="hauteur">Hauteur</label> :
            <input type="text" placeholder="30" name="hauteur" id="hauteur" />
        </p>
         <p>
            <label for="univers">Univers</label> :
            <input type="text" placeholder="..." name="univers" id="univers" />
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset> 
</form>
