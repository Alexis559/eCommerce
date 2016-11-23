<?php

require_once File::build_path(array("model", "Model.php"));

class ModelProduits {

    private $numProduit;
    private $nomProduit;
    private $qteStock;
    private $categorie;
    private $prix;
    private $poids;
    private $hauteur;
    private $univers;

    public function getNumProduit() {
        return $this->numProduit;
    }

    public function setNumProduit($numProduit) {
        $this->numProduit = $numProduit;
    }

    public function getNomProduit() {
        return $this->nomProduit;
    }

    public function setNomProduit($nomProduit) {
        $this->nomProduit = $nomProduit;
    }

    public function getQteStock() {
        return $this->qteStock;
    }

    public function setImmatriculation($qteStock) {
        $this->qteStock = $qteStock;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }
    
    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
    
    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }
    
    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }
    
    public function getUnivers() {
        return $this->univers;
    }

    public function setUnivers($univers) {
        $this->univers = $univers;
    }
    
    // un constructeur
    public function __construct($nom = NULL, $qte = NULL, $cat = NULL, $prix = NULL, $poi = NULL, $haut = NULL, $univ = NULL) {
        if (!is_null($nom) && !is_null($qte) && !is_null($cat) && !is_null($prix) && !is_null($poi) && !is_null($haut) && !is_null($univ)) {
            $this->nomProduit = $nom;
            $this->qteStock = $qte;
            $this->categorie = $cat;
            $this->prix = $prix;
            $this->poids = $poi;
            $this->hauteur = $haut;
            $this->univers = $univ;
        }
    }

    //methode d'affichage de tous les produits
    static public function getAllProduits() {
        try {
            $rep = Model::$pdo->query('SELECT * FROM Produits');
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduits');
            $tab_prod = $rep->fetchAll();
            return $tab_prod;
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method getAllProducts() /!\ )');
        }
    }
    
    static public function getProduitByNum($numProduit) {
        $sql = "SELECT * from Produits WHERE numProduit=:num_produit";
        try {
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "num_produit" => $numProduit,
                    //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête	 
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduits');
            $tab_prod = $req_prep->fetchAll();
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method getProduitByNum() /!\ )');
        }

        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_prod)) {
            return false;
        }

        return $tab_prod[0];
    }
    
    public function save() {
        $sql = "INSERT INTO Produits (nomProduit, qteStock, categorie, prix, poids, hauteur, univers) VALUES (:nom_tag, :qte_tag, :cat_tag, :prix_tag, :poids_tag, :haut_tag, :univ_tag)";
        try {
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "nom_tag" => $this->getNomProduit(),
                "qte_tag" => $this->getQteStock(),
                "cat_tag" => $this->getCategorie(),
                "prix_tag" => $this->getPrix(),
                "poids_tag" => $this->getPoids(),
                "haut_tag" => $this->getHauteur(),
                "univ_tag" => $this->getUnivers(),
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ methode save /!\ )');
        }
    }
    
}

?>