<?php
    // chargement du modèle
require_once File::build_path(array("model", "ModelProduits.php"));

class ControllerProduits {

    public static function readAll() {
        $tab_f = ModelProduits::getAllProduits();     //appel au modèle pour gerer la BD
        $controller = "figurines";
        $view = "list";
        $pagetitle = "Liste des figurines";
        require File::build_path(array("view", "view.php")); //"redirige" vers la vue
    }
    
    public static function read() {
        $f = ModelProduits::getProduitByNum($_GET['numProduit']);
        if ($f == false) {
            $controller = "figurines";
            $view = "error";
            $pagetitle = "Erreur";
            require File::build_path(array("view", "view.php"));
        } else {
            $controller = "figurines";
            $view = "detailProduit";
            $pagetitle = "Détails figurines";
            require File::build_path(array("view", "view.php"));
        }
    }
    
    public static function create() {
        $controller = "figurines";
        $view = "createProduit";
        $pagetitle = "Creer une figurine";
        require File::build_path(array("view","view.php"));
    }
    
    public static function created() {
        $controller = "figurines";
        $view = "created";
        $pagetitle = "Creation figurine";
        $figurine = new ModelProduits($_POST['nomProduit'], $_POST['qteStock'], $_POST['categorie'], $_POST['prix'], $_POST['poids'], $_POST['hauteur'], $_POST['univers']);
        $figurine->save();
        $tab_f = ModelProduits::getAllProduits();
        require File::build_path(array("view", "view.php"));
    }
    
}    

?>

