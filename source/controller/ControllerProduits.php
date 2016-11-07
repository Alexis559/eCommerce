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
            $controller = "produits";
            $view = "error";
            $pagetitle = "Erreur";
            require File::build_path(array("view", "view.php"));
        } else {
            $controller = "produits";
            $view = "detail";
            $pagetitle = "Détails figurines";
            require File::build_path(array("view", "view.php"));
        }
    }
    
}    

?>

