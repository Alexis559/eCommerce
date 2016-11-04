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
    public function __construct($num = NULL, $nom = NULL, $qte = NULL, $cat = NULL, $prix = NULL, $poi = NULL, $haut = NULL, $univ = NULL) {
        if (!is_null($num) && !is_null($nom) && !is_null($qte) && !is_null($cat) && !is_null($prix) && !is_null($poi) && !is_null($haut) && !is_null($univ)) {
            $this->numProduit = $num;
            $this->nomProduit = $nom;
            $this->qteStock = $qte;
            $this->categorie = $cat;
            $this->prix = $prix;
            $this->poids = $poi;
            $this->hauteur = $haut;
            $this->univers = $univ;
        }
    }

    // une methode d'affichage.
    /* public function afficher() {
      echo "Marque: " . $this->getMarque() . " Couleur: " . $this->getCouleur() . " Immatriculation: " . $this->getImmatriculation();
      } */

    static public function getAllProduits() {
        try {
            $rep = Model::$pdo->query('SELECT * FROM Produits');
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduits');
            $tab_prod = $rep->fetchAll();
            return $tab_prod;
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method getAllProducts /!\ )');
        }
    }
}

?>