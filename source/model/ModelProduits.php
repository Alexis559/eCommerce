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

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque2) {
        $this->marque = $marque2;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur2) {
        $this->couleur = $couleur2;
    }

    public function getImmatriculation() {
        return $this->immatriculation;
    }

    public function setImmatriculation($immatriculation2) {
        $this->immatriculation = $immatriculation2;
    }

    // un constructeur
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

    // une methode d'affichage.
    /* public function afficher() {
      echo "Marque: " . $this->getMarque() . " Couleur: " . $this->getCouleur() . " Immatriculation: " . $this->getImmatriculation();
      } */

    static public function getAllProduits() {
        try {
            $rep = Model::$pdo->query('SELECT * FROM voiture');
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
            $tab_voit = $rep->fetchAll();
            return $tab_voit;
        } catch (PDOException $e) {
            echo('Error tout cassé ( /!\ method getAllProducts /!\ )');
        }
    }
}

?>